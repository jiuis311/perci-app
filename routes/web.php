<?php

use Illuminate\Routing\Router;

/**@var Router $router */
$router->get('/', 'LandingPageController@index')->name('landingpage.index');
$router->get('/terms', 'LandingPageController@termOfService')->name('landingpage.termOfService');
$router->get('/policy', 'LandingPageController@privacyPolicy')->name('landingpage.privacyPolicy');
$router->get('/faq', 'LandingPageController@faq')->name('landingpage.faq');
$router->get('ult-upsell/login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
$router->post('ult-upsell/login', 'Auth\LoginController@login');
// $router->get('/store-popup', 'LandingPageController@popup')->name('landingpage.popup');
$router->get('/store-popup', 'LandingPageController@popupTest')->name('landingpage.popup');

$router->get('logout', 'Auth\LoginController@logout')->name('logout');

$router->get('auth/callback', 'AuthCallbackController@authCallback');
$router->get('load/callback', 'AuthCallbackController@loadCallback');
$router->get('uninstall/callback', 'AuthCallbackController@uninstallCallback');

$router->group(['prefix' => 'ult-upsell', 'middleware' => ['web', 'auth']], function (Router $router) {
    // $router->get('/', function (){
    //     return redirect('/admin/dashboard');
    // });
    $router->get('dashboard', 'AdminController@index')->name('dashboard');

    $router->group(['prefix' => 'tutorials'], function (Router $router) {
        $router->get('/', 'TutorialController@index')->name('tutorials');
        $router->get('/basic-upsell', 'TutorialController@basicUpsell')->name('tutorial.basicUpsell');
        $router->get('/basic-cross-sell', 'TutorialController@basicCrossSell')->name('basic-cross-sell-tutorial');
        $router->get('/boost-offer', 'TutorialController@offerBoost')->name('boost-offer-tutorial');
        $router->get('/ab-testing', 'TutorialController@abTesting')->name('ab-testing-tutorial');
        $router->get('/popup', 'TutorialController@popup')->name('popup-tutorials');
        $router->get('/report', 'TutorialController@reportTutorial')->name('report-tutorials');
    });
    $router->get('tutorials', 'TutorialController@index')->name('tutorials');

    $router->group(['prefix' => 'offer'], function (Router $router) {
        $router->get('/', 'AdminController@index');
        $router->get('new', 'AdminController@index');
        $router->get('settings', 'AdminController@index');
        $router->get('create/step1', 'AdminController@index');
        $router->get('create/step2', 'AdminController@index');
        $router->get('create', 'AdminController@index');

        $router->get('test', 'OfferController@testApi');
        $router->post('/', 'OfferController@store')->name('offer.store');

    });
    $router->get('report', 'AdminController@index');
    $router->get('pricing', 'AdminController@index');
    $router->get('help-center', 'AdminController@index');
    $router->post('help-center', 'HelpController@store');
    $router->get('feature-request', 'AdminController@index');
    $router->post('feature-request', 'FeatureController@store');

    $router->get('add-widget', 'OfferController@addWidgetToStorefront');
    $router->get('add-script', 'OfferController@addScriptsToStorefront');

    $router->get('add-widget', 'OfferController@addWidgetToStorefront');
    $router->get('add-script', 'OfferController@addScriptsToStorefront');
    $router->get('delete-script', 'AuthCallbackController@deleteScripts');
    $router->get('delete-widget', 'AuthCallbackController@deleteWidgets');

});
