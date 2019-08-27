<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('/ai/hubs', HubController::class);
    $router->resource('/ai/cur', CurriculumDevsController::class);
    $router->resource('/ai/stakeholder',StakeholderController::class);
    $router->resource('/national-pitch',NationalPitchController::class);
});
