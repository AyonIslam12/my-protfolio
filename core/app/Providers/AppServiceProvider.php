<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use App\Models\Language;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Frontend;
use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['request']->server->set('HTTPS', false);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $activeTemplate = activeTemplate();
        $general = GeneralSetting::first();
        $viewShare['general'] = $general;
        $viewShare['activeTemplate'] = $activeTemplate;
        $viewShare['activeTemplateTrue'] = activeTemplate(true);
        $viewShare['pages'] = Page::where('tempname',$activeTemplate)->where('is_default',0)->get();
        view()->share($viewShare);
        // view()->composer('admin.partials.topnav', function ($view) {
        //     $view->with([
        //         'adminNotifications'=>AdminNotification::where('read_status',0)->orderBy('id','desc')->get(),
        //     ]);
        // });
        view()->composer('partials.seo', function ($view) {
            $seo = Frontend::where('data_keys', 'seo.data')->first();
            $view->with([
                'seo' => $seo ? $seo->data_values : $seo,
            ]);
        });

        if($general->force_ssl){

            \URL::forceScheme('https');
        } else {
            \URL::forceScheme('http');
        }

        Paginator::useBootstrap();

    }
}
