<?php

namespace App\Http\Controllers\Frontend;

use App\Feedback;
use App\FooterInfo;
use App\FooterSitemap;
use App\FrMenu;
use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Http\Requests\CreateFrMenuRequest;
use App\Http\Requests\UpdateFrMenuRequest;
use Illuminate\Http\Request;



class FeedbackController extends Controller {

    /**
     * Display a listing of frmenu
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $current_slug = 'gop-y';
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
            ['name'=> 'Góp ý', 'class' => 'itemcrumb active'],
        ];

        return view('frontend.feedback', compact('footer_sitemap', 'footer', 'arr_menu', 'breadcrumb_arr'));
    }

    public function store(Request $request) {
        request()->validate([
            'captcha' => 'required|captcha'
        ],
            ['captcha.captcha'=>'Sai ma hien thi']);

        $feedback_content = $request->get('feedback-content');
        if (!$feedback_content || $feedback_content == '') {
            $request->session()->flash('alert-warning', 'Vui lòng nhập nội dung góp ý!');

            return redirect()->route('feedback.index');
        }

        # create new feedback
        Feedback::create([
            'short_content' => substr($feedback_content, 0, 30),
            'content' => stripslashes($feedback_content)
        ]);

        $request->session()->flash('alert-success', 'Chúng tôi đã ghi nhận đóng góp từ bạn. Xin cảm ơn!');

        return redirect()->route('feedback.index');

    }
}