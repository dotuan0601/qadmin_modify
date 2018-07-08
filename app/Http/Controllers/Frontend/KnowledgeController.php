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
use App\Products;
use Redirect;
use Schema;
use App\FrMenu;
use App\Http\Requests\CreateFrMenuRequest;
use App\Http\Requests\UpdateFrMenuRequest;
use Illuminate\Http\Request;



class KnowledgeController extends Controller {

    /**
     * Display a listing of frmenu
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $current_cat = null)
    {
        $current_slug = 'kien-thuc-chan-nuoi';
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

        # category
        if (!$current_cat) {
            $current_cat = 'heo';
        }
        $current_cat_id = null;
        $cats = KnowledgeCategory::all()->where('status', '=', 1);
        $cat_arr = [];
        foreach ($cats as $cat) {
            $cat_class = '';
            if (str_slug($cat->name) == $current_cat) {
                $cat_class = 'active';
                $current_cat_id = $cat->id;
            }
            $cat_arr[] = [
                'name' => $cat->name,
                'class' => $cat_class,
                'href' => str_slug($cat->name)
            ];
        }

        # feature video
        $feature_video = KnowledgeVideo::all()->where('knowledgecategory_id', '=', $current_cat_id)->take(1);
        # related video
        $related_videos = KnowledgeVideo::all()->where('is_feature', '!=', 1);

        # abount content
        $contents = AboutContent::all()->where('status', '=', 1);

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

        # archive
        $archives = AboutArchive::all();

        $breadcrumb_arr = [
            ['name'=> 'Trang chủ', 'class' => 'itemcrumb'],
            ['name'=> 'Giới thiệu', 'class' => 'itemcrumb active'],
        ];

        return view('frontend.knowledge', compact('arr_menu', 'cats', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'current_slug', 'contents', 'archives', 'cat_arr', 'feature_video', 'related_videos'));
    }

}