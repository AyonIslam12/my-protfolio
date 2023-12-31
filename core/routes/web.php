<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Route::get('download/cv', 'SiteController@downloadCv')->name('download.cv');
Route::get('testimonials', 'SiteController@testimonial')->name('testimonials');
Route::get('expertise', 'SiteController@expertise')->name('expertise');
Route::get('portfolio', 'SiteController@portfolio')->name('portfolio');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('contact-submit', 'SiteController@contactSubmit')->name('contact.submit');
Route::get('/blog', 'SiteController@blog')->name('blog');
Route::get('placeholder-image/{size}', 'SiteController@placeholderImage')->name('placeholder.image');
Route::get('/{slug}', 'SiteController@pages')->name('pages');
Route::get('/', 'SiteController@index')->name('home');

