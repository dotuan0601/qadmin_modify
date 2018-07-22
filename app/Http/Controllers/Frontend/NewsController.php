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
use Illuminate\Support\Facades\DB;



class NewsController extends Controller {

    /**
     * Display a listing of frmenu
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $current_menu = null, $cat_id = null)
    {
        $current_slug = 'tin-tuc-su-kien';
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
                        'link' => $sitemap->link,
                    ];
                }
            }
        }

        $breadcrumb_arr = [
            ['name'=> 'Trang chủ', 'class' => 'itemcrumb'],
            ['name'=> 'Tin tức', 'class' => 'itemcrumb active'],
        ];

        $top_news = News::all()->take(5);
        $other_top_news = [];
        $feature_top_news = null;
        foreach ($top_news as $top_new) {
            if ($top_new->is_feature == 1) {
                $feature_top_news = $top_new;
            }
            else {
                $other_top_news[] = $top_new;
            }
        }

        $list_frmenus = FrMenu::all()->where('parent_id', '=', 'Tin tức - sự kiện');
        $list_news = [];
        foreach ($list_frmenus as $menu) {
            $feature = News::all()->where('frmenu_id', '=', $menu->id)->where('is_feature', '=', 1)->first();
            if ($feature) {
                $news = News::all()->where('frmenu_id', '=', $menu->id)->where('id', '!=', $feature->id)->take(3);
            }
            else {
                $news= null;
            }

            $list_news[] = [
                'feature' => $feature,
                'list_news' => $news,
                'menu_id' => $menu->id,
                'menu_name' => $menu->name
            ];
        }
        $price_news = News::all()->where('frmenu_id', '=', 10)->take(4);
        $other_price_news = [];
        $feature_price_news = null;
        foreach ($price_news as $price_new) {
            if ($price_new->is_feature == 1) {
                $feature_price_news = $price_new;
            }
            else {
                $other_price_news[] = $price_new;
            }
        }
        return view('frontend.news', compact('arr_menu', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'current_menu', 'other_top_news', 'feature_top_news', 'list_news'));
    }

    /***
     * Get product detail
     *
     * @param Request $request
     * @param int $news_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail(Request $request, $news_id = 1) {
        $news = News::all()->where('id', '=', $news_id)->first();
        $menu_id = $news->frmenu_id;
        $menu = FrMenu::all()->where('id', '=', $menu_id)->first();
        if (!$menu) {
            return redirect('/');
        }
        $same_menus = FrMenu::all()->where('parent_id', '=', $menu->parent_id);
        $left_menus = [];
        foreach ($same_menus as $same_menu) {
            if ($same_menu->id == $menu->id) {
                $left_menus[] = [
                    'class' => 'active',
                    'name' => $same_menu->name,
                    'id' => $same_menu->id
                ];
            }
            else {
                $left_menus[] = [
                    'class' => '',
                    'name' => $same_menu->name,
                    'id' => $same_menu->id
                ];
            }
        }

        $current_slug = 'tin-tuc-su-kien';
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
            ['name'=> 'Giới thiệu', 'class' => 'itemcrumb active'],
        ];

        $news_detail = News::all()->where('id', '=', $news_id)->first();
        $related_news = News::all()->where('frmenu_id', '=', $news_detail->frmenu_id)->where('id', '!=', $news_id);

        return view('frontend.news_detail', compact('arr_menu', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'current_menu', 'news_detail', 'related_news', 'left_menus'));
    }



    public function list_news(Request $request, $current_menu = null, $menu_id = null)
    {
        if (!$menu_id) {
            return redirect('/');
        }
        $menu = FrMenu::all()->where('id', '=', $menu_id)->first();
        if (!$menu) {
            return redirect('/');
        }
        $same_menus = FrMenu::all()->where('parent_id', '=', $menu->parent_id);
        $left_menus = [];
        foreach ($same_menus as $same_menu) {
            if ($same_menu->id == $menu->id) {
                $left_menus[] = [
                    'class' => 'active',
                    'name' => $same_menu->name,
                    'id' => $same_menu->id
                ];
            }
            else {
                $left_menus[] = [
                    'class' => '',
                    'name' => $same_menu->name,
                    'id' => $same_menu->id
                ];
            }
        }
        $current_slug = 'tin-tuc-su-kien';
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
            ['name'=> $menu->parent_id, 'class' => 'itemcrumb'],
            ['name'=> $menu->name, 'class' => 'itemcrumb active'],
        ];

        $top_news = News::all()->take(5);
        $other_top_news = [];
        $feature_top_news = null;
        foreach ($top_news as $top_new) {
            if ($top_new->is_feature == 1) {
                $feature_top_news = $top_new;
            }
            else {
                $other_top_news[] = $top_new;
            }
        }

        $list_news = News::all()->where('frmenu_id', '=', $menu_id);

        return view('frontend.news_list', compact('arr_menu', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'current_menu', 'list_news', 'left_menus'));
    }
}