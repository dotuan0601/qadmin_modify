<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

# homepage
Route::get('/', 'Frontend\HomepageController@index');
Route::get('/trang-chu', 'Frontend\HomepageController@index');

# feedback
Route::get('/gop-y', 'Frontend\FeedbackController@index')->name('feedback.index');
Route::post('feedback', 'Frontend\FeedbackController@store')->name('feedback.store');

# captcha
Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');

# about
Route::get('/gioi-thieu', 'Frontend\AboutController@index')->name('about.index');
# kien thuc chan nuoi
Route::get('/kien-thuc-chan-nuoi', 'Frontend\KnowledgeController@index')->name('knowledge.index');
Route::get('/kien-thuc-chan-nuoi/{cat_slug}', 'Frontend\KnowledgeController@index')->name('knowledge.index');
Route::get('/kien-thuc-chan-nuoi/detail/{news_id}', 'Frontend\KnowledgeController@detail')->name('knowledge.detail')->where('news_id', '[0-9]+');
Route::get('/kien-thuc-chan-nuoi/{cat_slug}/{detail}', 'Frontend\KnowledgeController@index')->name('knowledge.index');
Route::post('knowledge', 'Frontend\KnowledgeController@store')->name('knowledge.store');
# san pham
Route::get('/san-pham', 'Frontend\ProductController@index')->name('product.index');
Route::get('/san-pham/({sub-menu}', 'Frontend\ProductController@index')->name('product.index');
Route::get('/san-pham/{current_menu}', 'Frontend\ProductController@index')->name('product.index');
Route::get('/san-pham/{current_menu}/{cat_id}', 'Frontend\ProductController@index')->where('cat_id', '[0-9]+')->name('product.index');
Route::get('/san-pham/{current_menu}/detail/{product_id}', 'Frontend\ProductController@detail')->name('product.detail');
# tin tuc - su kien
Route::get('/tin-tuc-su-kien', 'Frontend\NewsController@index')->name('news.index');
//Route::get('/san-pham/({sub-menu}', 'Frontend\ProductController@index')->name('product.index');
//Route::get('/san-pham/{current_menu}', 'Frontend\ProductController@index')->name('product.index');
//Route::get('/san-pham/{current_menu}/{cat_id}', 'Frontend\ProductController@index')->where('cat_id', '[0-9]+')->name('product.index');
Route::get('/tin-tuc-su-kien/detail/{news_id}', 'Frontend\NewsController@detail')->name('news.detail');
# tuyen dung
Route::get('/tuyen-dung', 'Frontend\RecruitController@index')->name('recruit.index');
Route::get('/tuyen-dung/{sub-menu}', 'Frontend\RecruitController@index')->name('recruit.index');
# lien he
Route::get('/lien-he', 'Frontend\ContactController@index')->name('contact.index');
Route::post('contact', 'Frontend\ContactController@store')->name('contact.store');
# hinh anh hoat dong
Route::get('/hinh-anh', 'Frontend\ImgActController@index')->name('img.index');