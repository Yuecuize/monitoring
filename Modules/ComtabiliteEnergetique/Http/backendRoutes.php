<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/comtabiliteenergetique'], function (Router $router) {
    $router->bind('comtabiliteenergetique', function ($id) {
        return app('Modules\ComtabiliteEnergetique\Repositories\ComtabiliteEnergetiqueRepository')->find($id);
    });
    $router->get('comtabiliteenergetiques', [
        'as' => 'admin.comtabiliteenergetique.comtabiliteenergetique.index',
        'uses' => 'ComtabiliteEnergetiqueController@index',
        'middleware' => 'can:comtabiliteenergetique.comtabiliteenergetiques.index'
    ]);
    $router->get('comtabiliteenergetiques/create', [
        'as' => 'admin.comtabiliteenergetique.comtabiliteenergetique.create',
        'uses' => 'ComtabiliteEnergetiqueController@create',
        'middleware' => 'can:comtabiliteenergetique.comtabiliteenergetiques.create'
    ]);



    $router->get('comtabiliteenergetiques/test',[
        'as'=>'admin.comtabiliteenergetique.comtabiliteenergetiques.test',
        'uses' => 'ComtabiliteEnergetiqueController@test'
    ]);
    $router->get('comtabiliteenergetiques/show',[
        'as'=>'admin.comtabiliteenergetique.comtabiliteenergetiques.show',
        'uses' => 'ComtabiliteEnergetiqueController@show'
    ]);
    $router->get('comtabiliteenergetiques/pdftest',[
        'as'=>'admin.comtabiliteenergetique.comtabiliteenergetiques.pdftest',
        'uses' => 'ComtabiliteEnergetiqueController@getpdftest'
    ]);

    $router->post('comtabiliteenergetiques/pdftest',[
        'as'=>'admin.comtabiliteenergetique.comtabiliteenergetiques.pdftest',
        'uses' => 'ComtabiliteEnergetiqueController@postpdftest'
    ]);


    $router->get('comtabiliteenergetiques/curl',[
        'as'=>'admin.comtabiliteenergetique.comtabiliteenergetiques.curl',
        'uses' => 'ComtabiliteEnergetiqueController@curl'
    ]);



    $router->post('comtabiliteenergetiques', [
        'as' => 'admin.comtabiliteenergetique.comtabiliteenergetique.store',
        'uses' => 'ComtabiliteEnergetiqueController@store',
        'middleware' => 'can:comtabiliteenergetique.comtabiliteenergetiques.store'
    ]);
    $router->get('comtabiliteenergetiques/{comtabiliteenergetique}/edit', [
        'as' => 'admin.comtabiliteenergetique.comtabiliteenergetique.edit',
        'uses' => 'ComtabiliteEnergetiqueController@edit',
        'middleware' => 'can:comtabiliteenergetique.comtabiliteenergetiques.edit'
    ]);
    $router->put('comtabiliteenergetiques/{comtabiliteenergetique}', [
        'as' => 'admin.comtabiliteenergetique.comtabiliteenergetique.update',
        'uses' => 'ComtabiliteEnergetiqueController@update',
        'middleware' => 'can:comtabiliteenergetique.comtabiliteenergetiques.update'
    ]);
    $router->delete('comtabiliteenergetiques/{comtabiliteenergetique}', [
        'as' => 'admin.comtabiliteenergetique.comtabiliteenergetique.destroy',
        'uses' => 'ComtabiliteEnergetiqueController@destroy',
        'middleware' => 'can:comtabiliteenergetique.comtabiliteenergetiques.destroy'
    ]);
// append

});
