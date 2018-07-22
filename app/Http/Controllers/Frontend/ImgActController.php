<?php

namespace App\Http\Controllers\Frontend;

use App\Company;
use App\FaqList;
use App\FooterInfo;
use App\FooterSitemap;
use App\Http\Controllers\Controller;
use App\ImageAct;
use App\News;
use App\PriceShow;
use App\Products;
use Redirect;
use Schema;
use App\FrMenu;
use App\Http\Requests\CreateFrMenuRequest;
use App\Http\Requests\UpdateFrMenuRequest;
use Illuminate\Http\Request;



class ImgActController extends Controller {

    /**
     * Display a listing of frmenu
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $frmenu = FrMenu::all();

        $arr_menu = [];
        foreach ($frmenu as $key => $each_menu) {
            if (!$each_menu->parent_id && !array_key_exists($each_menu->name, $arr_menu)) {
                $arr_menu[$each_menu->name] = [
                    'name' => $each_menu->name
                ];

                if ($key == 0) {
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
        $img_acts = ImageAct::all();

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
            ['name'=> 'Hình ảnh', 'class' => 'itemcrumb active'],
        ];

        return view('frontend.imgact', compact('arr_menu', 'img_acts', 'footer', 'footer_sitemap', 'breadcrumb_arr'));
    }
}