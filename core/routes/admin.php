<?php

use App\Http\Controllers\Admin\GeneralSettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Start Admin Area
|--------------------------------------------------------------------------
*/

Route::namespace('Auth')->group(function () {
    Route::get('/', 'LoginController@showLoginForm')->name('login');
    Route::post('/', 'LoginController@login')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    // Admin Password Reset
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/reset', 'ForgotPasswordController@sendResetCodeEmail');
    Route::post('password/verify-code', 'ForgotPasswordController@verifyCode')->name('password.verify.code');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
    Route::post('password/reset/change', 'ResetPasswordController@reset')->name('password.change');
});

Route::middleware('admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('transaction-detail/graph', 'AdminController@trxDetailGraph')->name('trx.detail');
    Route::get('profile', 'AdminController@profile')->name('profile');
    Route::post('profile', 'AdminController@profileUpdate')->name('profile.update');
    Route::get('password', 'AdminController@password')->name('password');
    Route::post('password', 'AdminController@passwordUpdate')->name('password.update');

    //Notification
    Route::get('notifications','AdminController@notifications')->name('notifications');
    Route::get('notification/read/{id}','AdminController@notificationRead')->name('notification.read');
    Route::get('notifications/read-all','AdminController@readAll')->name('notifications.readAll');

    // Language Manager
    Route::get('/language', 'LanguageController@langManage')->name('language.manage');
    Route::post('/language', 'LanguageController@langStore')->name('language.manage.store');
    Route::post('/language/delete/{id}', 'LanguageController@langDel')->name('language.manage.del');
    Route::post('/language/update/{id}', 'LanguageController@langUpdate')->name('language.manage.update');
    Route::get('/language/edit/{id}', 'LanguageController@langEdit')->name('language.key');
    Route::post('/language/import', 'LanguageController@langImport')->name('language.importLang');

    Route::post('language/store/key/{id}', 'LanguageController@storeLanguageJson')->name('language.store.key');
    Route::post('language/delete/key/{id}', 'LanguageController@deleteLanguageJson')->name('language.delete.key');
    Route::post('language/update/key/{id}', 'LanguageController@updateLanguageJson')->name('language.update.key');



    // General Setting
    Route::get('general-setting', [GeneralSettingController::class,'index'])->name('setting.index');
    Route::post('general-setting', 'GeneralSettingController@update')->name('setting.update');
    Route::get('optimize', 'GeneralSettingController@optimize')->name('setting.optimize');

    // Logo-Icon
    Route::get('setting/logo-icon', 'GeneralSettingController@logoIcon')->name('setting.logo.icon');
    Route::post('setting/logo-icon', 'GeneralSettingController@logoIconUpdate')->name('setting.logo.icon');

    Route::get('setting/qr-code/template', 'GeneralSettingController@qrCodeTemplate')->name('qr.template');
    Route::post('setting/qr-code/template', 'GeneralSettingController@qrCodeTemplateUpdate');

    // Plugin
    Route::get('extensions', 'ExtensionController@index')->name('extensions.index');
    Route::post('extensions/update/{id}', 'ExtensionController@update')->name('extensions.update');
    Route::post('extensions/activate', 'ExtensionController@activate')->name('extensions.activate');
    Route::post('extensions/deactivate', 'ExtensionController@deactivate')->name('extensions.deactivate');


    // Email Setting
    Route::get('email-template/global', 'EmailTemplateController@emailTemplate')->name('email.template.global');
    Route::post('email-template/global', 'EmailTemplateController@emailTemplateUpdate')->name('email.template.global');
    Route::get('email-template/setting', 'EmailTemplateController@emailSetting')->name('email.template.setting');
    Route::post('email-template/setting', 'EmailTemplateController@emailSettingUpdate')->name('email.template.setting');
    Route::get('email-template/index', 'EmailTemplateController@index')->name('email.template.index');
    Route::get('email-template/{id}/edit', 'EmailTemplateController@edit')->name('email.template.edit');
    Route::post('email-template/{id}/update', 'EmailTemplateController@update')->name('email.template.update');
    Route::post('email-template/send-test-mail', 'EmailTemplateController@sendTestMail')->name('email.template.test.mail');


    // SEO
    Route::get('seo', 'FrontendController@seoEdit')->name('seo');

      // Frontend
      Route::name('frontend.')->prefix('frontend')->group(function () {


        Route::get('templates', 'FrontendController@templates')->name('templates');
        Route::post('templates', 'FrontendController@templatesActive')->name('templates.active');


        Route::get('frontend-sections/{key}', 'FrontendController@frontendSections')->name('sections');
        Route::post('frontend-content/{key}', 'FrontendController@frontendContent')->name('sections.content');
        Route::get('frontend-element/{key}/{id?}', 'FrontendController@frontendElement')->name('sections.element');
        Route::post('remove', 'FrontendController@remove')->name('remove');

        // Page Builder
        Route::get('manage-pages', 'PageBuilderController@managePages')->name('manage.pages');
        Route::post('manage-pages', 'PageBuilderController@managePagesSave')->name('manage.pages.save');
        Route::post('manage-pages/update', 'PageBuilderController@managePagesUpdate')->name('manage.pages.update');
        Route::post('manage-pages/delete', 'PageBuilderController@managePagesDelete')->name('manage.pages.delete');
        Route::get('manage-section/{id}', 'PageBuilderController@manageSection')->name('manage.section');
        Route::post('manage-section/{id}', 'PageBuilderController@manageSectionUpdate')->name('manage.section.update');
    });

    Route::get('system-info','AdminController@systemInfo')->name('system.info');
});
