<?php

use Illuminate\Routing\Router;

/**@var Router $router*/
$router->get('/', 'LandingPageController@index')->name('landingpage.index');
$router->get('/terms', 'LandingPageController@termOfService')->name('landingpage.termOfService');
$router->get('/policy', 'LandingPageController@privacyPolicy')->name('landingpage.privacyPolicy');
$router->get('/faq', 'LandingPageController@faq')->name('landingpage.faq');
$router->get('ult-upsell/login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
$router->post('ult-upsell/login', 'Auth\LoginController@login');
$router->get('/store-popup', 'LandingPageController@popup')->name('landingpage.popup');
// $router->get('hoc-vien/dang-nhap', 'Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
// $router->post('hoc-vien/dang-nhap', 'Auth\LoginController@studentLogin');
// $router->get('giao-vien/dang-nhap', 'Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
// $router->post('giao-vien/dang-nhap', 'Auth\LoginController@teacherLogin');
 $router->get('logout', 'Auth\LoginController@logout')->name('logout');

$router->group(['prefix' => 'ult-upsell', 'middleware' => ['web', 'auth']], function (Router $router) {
    // $router->get('/', function (){
    //     return redirect('/admin/dashboard');
    // });
    $router->get('dashboard', 'AdminController@index')->name('dashboard');

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
    $router->get('help-center', 'AdminController@index');
    $router->post('help-center','EmailController@store');

    // $router->get('/import', 'HomeController@import')->name('import');
    // $router->post('/import', 'HomeController@importPost')->name('import.post');
    // $router->group(['prefix'=>'teacher'], function (Router $router) {
    //     $router->get('teachers', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'user'], function (Router $router) {
    //     $router->get('users', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'class'], function (Router $router) {
    //     $router->get('/classes', 'AdminController@index');
    //     $router->get('/{id}/edit', 'AdminController@index');
    //     $router->get('/create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'item'], function (Router $router) {
    //     $router->get('type/type', 'AdminController@index');
    //     $router->get('type/{id}/edit', 'AdminController@index');
    //     $router->get('type/create', 'AdminController@index');
    //     $router->group(['prefix'=>'type'], function (Router $router) {
    //         $router->get('/price', 'AdminController@index');
    //         $router->get('/price/{id}/edit', 'AdminController@index');
    //         $router->get('/price/create', 'AdminController@index');
    //     });
    // });
    // $router->group(['prefix'=>'fee'], function (Router $router) {
    //     $router->get('fees', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'item'], function (Router $router) {
    //     $router->get('items', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'item/block'], function (Router $router) {
    //     $router->get('blocks', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'course'], function (Router $router) {
    //     $router->get('courses', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'book'], function (Router $router) {
    //     $router->get('books', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('{id}/apply', 'AdminController@index');
    //     $router->get('{id}/info', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'source'], function (Router $router) {
    //     $router->get('sources', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'program'], function (Router $router) {
    //     $router->get('programs', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'student'], function (Router $router) {
    //     $router->get('students', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('{id}/info', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'sfee'], function (Router $router) {
    //     $router->get('sfees', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('{id}/info', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'subject'], function (Router $router) {
    //     $router->get('subjects', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'exam'], function (Router $router) {
    //     $router->get('exams', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('{id}/student', 'AdminController@index');
    //     $router->get('{id}/add/student', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'ticket'], function (Router $router) {
    //     $router->get('book', 'AdminController@index');
    //     $router->get('tickets', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    //     $router->get('students', 'AdminController@index');
    //     $router->get('teacher', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'setting'], function (Router $router) {
    //     $router->get('/general', 'AdminController@index');
    //     $router->get('/calendar', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'payment'], function (Router $router) {
    //     $router->get('/payments', 'AdminController@index');
    //     $router->get('/create', 'AdminController@index');
    // });
    // $router->get('account/profile', 'AdminController@index');
    // $router->group(['prefix'=>'practice'], function (Router $router) {
    //     $router->get('/practices', 'AdminController@index');
    // });
    // $router->group(['prefix'=>'group'], function (Router $router) {
    //     $router->get('groups', 'AdminController@index');
    //     $router->get('{id}/edit', 'AdminController@index');
    //     $router->get('{id}/info', 'AdminController@index');
    //     $router->get('create', 'AdminController@index');
    // });

});
