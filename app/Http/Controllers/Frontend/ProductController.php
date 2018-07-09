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
    public function index(Request $request, $current_menu = null, $current_cat = null)
    {
        $current_slug = 'san-pham';
        $frmenu = FrMenu::all();
        $arr_menu = [];
        foreach ($frmenu as $key => $each_menu) {
            if (!$each_menu->parent_id && !array_key_exists($each_menu->name, $arr_menu)) {
                $arr_menu[$each_menu->name] = [
                    'name' => $each_menu->name
                ];

                if (str_slug($each_menu->name) == $current_slug) {
                    $arr_menu[$each_menu->name]['is_active'] = true;
                }
                else {
                    $arr_menu[$each_menu->name]['is_active'] = false;
                }
            }
            if ($each_menu->parent_id) {
                if (array_key_exists($each_menu->parent_id, $arr_menu)) {
                    $arr_menu[$each_menu->parent_id]['children'][] = $each_menu->name;
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

        if (!$current_cat) {
            $products = Products::all()->where('frmenu_id', '=', $frmenu_id);
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
            ['name'=> 'Giới thiệu', 'class' => 'itemcrumb active'],
        ];

        return view('frontend.product', compact('arr_menu', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'product_menus', 'products'));
    }

}