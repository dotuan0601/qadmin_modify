<?php

namespace App\Http\Controllers\Frontend;

use App\AboutArchive;
use App\AboutCategory;
use App\AboutContent;
use App\Company;
use App\FaqCategory;
use App\FaqQuestion;
use App\FooterInfo;
use App\FooterSitemap;
use App\Http\Controllers\Controller;
use App\ImageAct;
use App\KnowledgeCategory;
use App\KnowledgeVideo;
use App\News;
use App\PriceShow;
use App\Products;
use App\FaqList;
use Redirect;
use Schema;
use App\FrMenu;
use App\Http\Requests\CreateFrMenuRequest;
use App\Http\Requests\UpdateFrMenuRequest;
use Illuminate\Http\Request;



class KnowledgeController extends Controller {

    /**
     * Kien thuc chan nuoi
     *
     * @param Request $request
     * @param null $current_slug
     * @param null $detail
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $current_slug = null, $detail = null)
    {
        $current_menu = 'kien-thuc-chan-nuoi';
        $frmenu = FrMenu::all();
        $arr_menu = [];
        $current_menu_id = null;
        $current_menu_name = '';
        $current_children_menu_id = null;
        foreach ($frmenu as $key => $each_menu) {
            if (!$each_menu->parent_id && !array_key_exists($each_menu->name, $arr_menu)) {
                $arr_menu[$each_menu->name] = [
                    'name' => $each_menu->name
                ];

                if (str_slug($each_menu->name) == $current_menu) {
                    $arr_menu[$each_menu->name]['is_active'] = true;
                    $current_menu_id = $each_menu->id;
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

                if (str_slug($each_menu->name) == $current_slug) {
                    $current_children_menu_id = $each_menu->id;
                }
            }
        }

        # category
        if (!$detail) {
            $detail = 'heo';
        }
        $current_cat_id = null;
        $cats = KnowledgeCategory::all()->where('status', '=', 1);
        $cat_arr = [];
        foreach ($cats as $cat) {
            $cat_class = '';
            if (str_slug($cat->name) == $detail) {
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
            ['name'=> $current_menu_name, 'class' => 'itemcrumb active'],
        ];

        if (!$current_slug || ($current_slug && strpos($current_slug, 'video') > -1) || !$detail) {
            return view('frontend.knowledge.knowledge_video', compact('arr_menu', 'cats', 'footer', 'footer_sitemap',
                'breadcrumb_arr', 'current_slug', 'contents', 'archives', 'cat_arr', 'feature_video', 'related_videos', 'detail'));
        }
        elseif ($current_slug && strpos($current_slug, 'cau-hoi') > -1) {
            $faq_cats = FaqCategory::all()->where('is_active', '=', 1);
//            $faqs = News::all()->where('frmenu_id', '=', $current_children_menu_id);
            $faqs = FaqList::all();
            return view('frontend.knowledge.knowledge_faq', compact('arr_menu', 'cats', 'footer', 'footer_sitemap',
                'breadcrumb_arr', 'current_slug', 'contents', 'archives', 'cat_arr', 'feature_video', 'related_videos', 'faqs', 'faq_cats'));
        } else {
            # feature video
            $feature_video = KnowledgeVideo::all()->where('is_feature', '=', 1)->take(1);
            if ($feature_video) {
                $feature_video = $feature_video[0];
            }
            # related video
            $related_videos = KnowledgeVideo::all()->where('is_feature', '!=', 1);
            # news
            $news = News::all()->where('frmenu_id', '=', $current_children_menu_id)->first();

            $menu = FrMenu::all()->where('id', '=', $news->frmenu_id)->first();
            $same_menus = FrMenu::all()->where('parent_id', '=', $menu->parent_id);
            foreach ($same_menus as $same_menu) {
                if ($same_menu->id == $menu->id) {
                    $left_menus[] = [
                        'class' => 'active',
                        'name' => $same_menu->name,
                        'parent' => $same_menu->parent_id,
                        'id' => $same_menu->id
                    ];
                }
                else {
                    $left_menus[] = [
                        'class' => '',
                        'parent' => $same_menu->parent_id,
                        'name' => $same_menu->name,
                        'id' => $same_menu->id
                    ];
                }
            }

            $breadcrumb_arr = [
                ['name'=> 'Trang chủ', 'class' => 'itemcrumb'],
                ['name'=> $current_menu_name, 'class' => 'itemcrumb'],
                ['name'=> $menu->name, 'class' => 'itemcrumb active']
            ];

            return view('frontend.knowledge.knowledge_news', compact('arr_menu', 'cats', 'footer', 'footer_sitemap',
                'breadcrumb_arr', 'current_slug', 'contents', 'archives', 'cat_arr', 'feature_video', 'related_videos', 'news', 'left_menus'));
        }
    }

    public function detail(Request $request, $detail_id = null) {
        if (!$detail_id) {
            return abort(404);
        }

        $current_menu = 'kien-thuc-chan-nuoi';
        $frmenu = FrMenu::all();
        $arr_menu = [];
        foreach ($frmenu as $key => $each_menu) {
            if (!$each_menu->parent_id && !array_key_exists($each_menu->name, $arr_menu)) {
                $arr_menu[$each_menu->name] = [
                    'name' => $each_menu->name
                ];

                if (str_slug($each_menu->name) == $current_menu) {
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

        # category
        $detail = 'heo';
        $current_cat_id = null;
        $cats = KnowledgeCategory::all()->where('status', '=', 1);
        $cat_arr = [];
        foreach ($cats as $cat) {
            $cat_class = '';
            if (str_slug($cat->name) == $detail) {
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

        # feature video
        $feature_video = KnowledgeVideo::all()->where('is_feature', '=', 1)->take(1);
        if ($feature_video) {
            $feature_video = $feature_video[0];
        }
        # related video
        $related_videos = KnowledgeVideo::all()->where('is_feature', '!=', 1);
        # news
        $news = News::all()->where('id', '=', $detail_id)->first();

        $left_menus = [];
        $menu = FrMenu::all()->where('id', '=', $news->frmenu_id)->first();
        if (!$menu) {
            return redirect('/');
        }
        $same_menus = FrMenu::all()->where('parent_id', '=', $menu->parent_id);
        foreach ($same_menus as $same_menu) {
            if ($same_menu->id == $menu->id) {
                $left_menus[] = [
                    'class' => 'active',
                    'name' => $same_menu->name,
                    'parent' => $same_menu->parent_id,
                    'id' => $same_menu->id
                ];
            }
            else {
                $left_menus[] = [
                    'class' => '',
                    'parent' => $same_menu->parent_id,
                    'name' => $same_menu->name,
                    'id' => $same_menu->id
                ];
            }
        }

        return view('frontend.knowledge.knowledge_news_detail', compact('arr_menu', 'cats', 'footer', 'footer_sitemap',
            'breadcrumb_arr', 'current_slug', 'contents', 'archives', 'cat_arr', 'feature_video', 'related_videos', 'news', 'left_menus'));
    }

    public function store(Request $request) {
        $name = $request->get('faq_name');
        $email = $request->get('faq_email');
        $cat = $request->get('faq_cat_selection');
        $content = $request->get('faq_content');
        if (!$name || $name == '') {
            $request->session()->flash('alert-warning', 'Nhập họ tên!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('faq_name', $name);
        }
        if (!$email || $email == '') {
            $request->session()->flash('alert-warning', 'Nhập email!');
            return redirect()->back();
        }
        elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL )) {
            $request->session()->flash('faq_email', $email);
            $request->session()->flash('alert-warning', 'Email không hợp lệ!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('faq_email', $email);
        }
        if (!$cat || $cat == '') {
            $request->session()->flash('alert-warning', 'Chọn danh mục!');
            return redirect()->back();
        }
        if (!$content || $content == '') {
            $request->session()->flash('alert-warning', 'Nhập nội dung!');
            return redirect()->back();
        }
        else {
            $request->session()->flash('faq_content', $content);
        }

        FaqQuestion::create([
            'name' => $name,
            'email' => $email,
            'faqcategory_id' => $cat,
            'content' => stripslashes($content)
        ]);

        $request->session()->flash('alert-success', 'Cảm ơn bạn đã hỏi!');

        return redirect()->back();
    }
}