<?php

use Illuminate\Routing\Router;

/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/', [
        'uses' => 'PublicController@homepage',
        'as' => 'homepage',
        'middleware' => config('asgard.page.config.middleware'),
    ]);

    $router->get('/graphic/generate', [
        'uses' => 'PublicController@generateGraphic',
        'as' => 'generate.graphic',
    ]);

    $router->get('/graphic/multgenerate', [
        'uses' => 'PublicController@generatemultGraphic',
        'as' => 'generate.multgraphic',
    ]);
    $router->get('/vue', [
        'uses' => 'PublicController@vue',
        'as' => 'vue',
    ]);
}

    $router->any('{uri}', [
        'uses' => 'PublicController@uri',
        'as' => 'page',
        'middleware' => config('asgard.page.config.middleware'),
    ])->where('uri', '.*');

