<?php

namespace App\Http\Controllers\Frontend;

use App\AboutArchive;
use App\AboutCategory;
use App\AboutContent;
use App\Company;
use App\FooterInfo;
use App\FooterSitemap;
use App\Http\Controllers\Controller;
use App\ImageAct;
use App\KnowledgeCategory;
use App\KnowledgeVideo;
use App\News;
use App\PriceShow;
use App\ProductCategory;
use App\ProductDetail;
use App\Products;
use Redirect;
use Schema;
use App\FrMenu;
use App\Http\Requests\CreateFrMenuRequest;
use App\Http\Requests\UpdateFrMenuRequest;
use Illuminate\Http\Request;



class ProductController extends Controller {

    /**
     * Display a listing of frmenu
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $current_menu = null, $cat_id = null)
    {
        $current_slug = 'san-pham';
        $frmenu = FrMenu::all();
        $arr_menu = [];
        $current_menu_name = '';
        foreach ($frmenu as $key => $each_menu) {
            if (!$each_menu->parent_id && !array_key_exists($each_menu->name, $arr_menu)) {
                $arr_menu[$each_menu->name] = [
                    'name' => $each_menu->name
                ];

                if (str_slug($each_menu->name) == $current_slug) {
                    $arr_menu[$each_menu->name]['is_active'] = true;
                    $current_menu_name = $each_menu->name;
                }
                else {
                    $arr_menu[$each_menu->name]['is_active'] = false;
                }
            }
            if ($each_menu->parent_id) {
                if (array_key_exists($each_menu->parent_id, $arr_menu)) {
                    $arr_menu[$each_menu->parent_id]['children'][] = [
                        'name' => $each_menu->name,
                        'id' => $each_menu->id
                    ];
                }
            }
        }

        # all products category
        $product_cats = ProductCategory::all()->where('status', '=', 1);
        $product_menus = [];
        $index = 0;
        $active_index = 1;
        $frmenu_id = null;
        foreach ($product_cats as $product_cat) {
            $class = 'hassub';
            $product_menu = FrMenu::all()->where('id', '=', $product_cat->frmenu_id)->first();

            if (!array_key_exists($product_menu->name, $product_menus)) {
                $index += 1;
                if (!$current_menu) {
                    if ($active_index == $index) {
                        $frmenu_id = $product_menu->id;
                        $class = $class . ' active';
                    }
                }
                else {
                    if (str_slug($product_menu->name) == $current_menu) {
                        $frmenu_id = $product_menu->id;
                        $class = $class . ' active';
                    }
                }

                $product_menus[$product_menu->name] = [
                    'class' => $class,
                    'children' => [$product_cat->name => $product_cat->id]
                ];
            }
            if (!array_key_exists($product_cat->name, $product_menus[$product_menu->name])) {
                $product_menus[$product_menu->name]['children'][$product_cat->name] = $product_cat->id;
            }
        }


        if (!$cat_id) {
            $products = Products::all()->where('frmenu_id', '=', $frmenu_id);
        }
        else {
            $products = Products::all()->where('productcategory_id', '=', $cat_id);
        }


        $footer = FooterInfo::all()->take(1);
        $raw_footer_sitemap = FooterSitemap::all();
        $footer_sitemap = [];
        foreach ($raw_footer_sitemap as $sitemap) {
            if ($sitemap->is_parent && !array_key_exists($sitemap->name, $footer_sitemap)) {
                $footer_sitemap[$sitemap->name] = ['name' => $sitemap['name']];
            }

            if ($sitemap->parent_id) {
                if (array_key_exists($sitemap->parent_id, $footer_sitemap)) {
                    $footer_sitemap[$sitemap->parent_id]['children'][] = [
                        'name' => $sitemap->name,
                        'link' => $sitemap->link
                    ];
                }
            }
        }

        $breadcrumb_arr = [
            ['name'=> 'Trang chủ', 'class' => 'itemcrumb'],
            ['name'=> $current_menu_name, 'class' => 'itemcrumb active'],
        ];

//        print_r($product_menus); die;

        return view('frontend.product', compact('arr_menu', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'product_menus', 'products', 'current_menu'));
    }

    /***
     * Get product detail
     *
     * @param Request $request
     * @param null $current_menu
     * @param int $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail(Request $request, $current_menu = null, $product_id = 1) {
        $current_slug = 'san-pham';
        $frmenu = FrMenu::all();
        $arr_menu = [];
        $current_menu_name = '';
        foreach ($frmenu as $key => $each_menu) {
            if (!$each_menu->parent_id && !array_key_exists($each_menu->name, $arr_menu)) {
                $arr_menu[$each_menu->name] = [
                    'name' => $each_menu->name
                ];

                if (str_slug($each_menu->name) == $current_slug) {
                    $arr_menu[$each_menu->name]['is_active'] = true;
                    $current_menu_name = $each_menu->name;
                }
                else {
                    $arr_menu[$each_menu->name]['is_active'] = false;
                }
            }
            if ($each_menu->parent_id) {
                if (array_key_exists($each_menu->parent_id, $arr_menu)) {
                    $arr_menu[$each_menu->parent_id]['children'][] = [
                        'name' => $each_menu->name,
                        'id' => $each_menu->id
                    ];
                }
            }
        }

        $footer = FooterInfo::all()->take(1);
        $raw_footer_sitemap = FooterSitemap::all();
        $footer_sitemap = [];
        foreach ($raw_footer_sitemap as $sitemap) {
            if ($sitemap->is_parent && !array_key_exists($sitemap->name, $footer_sitemap)) {
                $footer_sitemap[$sitemap->name] = ['name' => $sitemap['name']];
            }

            if ($sitemap->parent_id) {
                if (array_key_exists($sitemap->parent_id, $footer_sitemap)) {
                    $footer_sitemap[$sitemap->parent_id]['children'][] = [
                        'name' => $sitemap->name,
                        'link' => $sitemap->link
                    ];
                }
            }
        }

        $breadcrumb_arr = [
            ['name'=> 'Trang chủ', 'class' => 'itemcrumb'],
            ['name'=> $current_menu_name, 'class' => 'itemcrumb active'],
        ];

        $product = Products::all()->where('id', '=', $product_id)->first();
        $product_detail = ProductDetail::all()->where('products_id', '=', $product_id)->first();
        $related_products = Products::all()->where('productcategory_id', '=', $product->productcategory_id)
        ->where('id', '!=', $product_id);

        if ($product_detail) {
            return view('frontend.product_detail', compact('arr_menu', 'footer', 'footer_sitemap',
                'breadcrumb_arr', 'current_menu', 'product', 'product_detail', 'related_products'));
        }
        else {
            return view('frontend.product_detail_empty', compact('arr_menu', 'footer', 'footer_sitemap',
                'breadcrumb_arr', 'current_menu', 'product', 'product_detail', 'related_products'));
        }

    }

}