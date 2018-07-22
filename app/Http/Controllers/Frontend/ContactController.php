<?php

namespace App\Http\Controllers\Frontend;

use App\AboutArchive;
use App\AboutCategory;
use App\AboutContent;
use App\Company;
use App\ContactInfo;
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
use App\UserContact;
use Redirect;
use Schema;
use App\FrMenu;
use App\Http\Requests\CreateFrMenuRequest;
use App\Http\Requests\UpdateFrMenuRequest;
use Illuminate\Http\Request;



class ContactController extends Controller {

    /**
     * Display a listing of frmenu
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $sub_menu = null)
    {
        $current_slug = 'lien-he';
        $frmenu = FrMenu::all();
        $arr_menu = [];
        $left_menus = [];
        $is_active = true;
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
                    if (str_slug($each_menu->parent_id) == $current_slug) {
                        if ($is_active) {
                            $is_active_class = 'active';
                            $is_active = false;
                        }
                        else {
                            $is_active_class = '';
                        }
                        $left_menus[] = [
                            'class'=> $is_active_class,
                            'name' => $each_menu->name,
                            'href' => '/' . $current_slug . '/' . str_slug($each_menu->name)
                        ];
                    }

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

        $contact_info = ContactInfo::all()->first();
        return view('frontend.contact', compact('arr_menu', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'current_menu', 'contact_info', 'left_menus'));
    }

    public function store(Request $request) {
        request()->validate([
            'captcha' => 'required|captcha'
        ],
            ['captcha.captcha'=>'Sai ma hien thi']);

        $name = $request->get('contact_name');
        $email = $request->get('contact_email');
        $phone = $request->get('contact_phone');
        $title = $request->get('contact_title');
        $content = $request->get('contact_content');
        if (!$name || $name == '') {
            $request->session()->flash('alert-warning', 'Nhập họ tên!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('contact_name', $name);
        }
        if (!$email || $email == '') {
            $request->session()->flash('alert-warning', 'Nhập email!');
            return redirect()->back();
        }
        elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL )) {
            $request->session()->flash('contact_email', $email);
            $request->session()->flash('alert-warning', 'Email không hợp lệ!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('contact_email', $email);
        }
        if (!$phone || $phone == '') {
            $request->session()->flash('alert-warning', 'Nhập số điện thoại!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('contact_phone', $phone);
        }
        if (!$title || $title == '') {
            $request->session()->flash('alert-warning', 'Nhập tiêu đề!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('contact_title', $title);
        }

        UserContact::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'title' => $title,
            'content' => stripslashes($content)
        ]);

        $request->session()->flash('alert-success', 'Cảm ơn bạn đã gửi liên hệ!');

        return redirect()->back();
    }

}