<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/report'], function (Router $router) {
    $router->bind('reports', function ($id) {
        return app('Modules\Report\Repositories\ReportsRepository')->find($id);
    });
    $router->get('reports', [
        'as' => 'admin.report.reports.index',
        'uses' => 'ReportsController@index',
        'middleware' => 'can:report.reports.index'
    ]);
    $router->get('reports/create', [
        'as' => 'admin.report.reports.create',
        'uses' => 'ReportsController@create',
        'middleware' => 'can:report.reports.create'
    ]);
    $router->post('reports', [
        'as' => 'admin.report.reports.store',
        'uses' => 'ReportsController@store',
        'middleware' => 'can:report.reports.store'
    ]);
    $router->get('reports/{reports}/edit', [
        'as' => 'admin.report.reports.edit',
        'uses' => 'ReportsController@edit',
        'middleware' => 'can:report.reports.edit'
    ]);
    $router->put('reports/{reports}', [
        'as' => 'admin.report.reports.update',
        'uses' => 'ReportsController@update',
        'middleware' => 'can:report.reports.update'
    ]);
    $router->delete('reports/{reports}', [
        'as' => 'admin.report.reports.destroy',
        'uses' => 'ReportsController@destroy',
        'middleware' => 'can:report.reports.destroy'
    ]);
// append
    $router->post('reports/pdfByDay', [
        'as' => 'admin.report.reports.pdfByDay',
        'uses' => 'ReportsController@pdfByDay',
    ]);
    $router->get('reports/day', [
        'as' => 'admin.report.reports.day',
        'uses' => 'ReportsController@day',
        'middleware' => 'can:report.reports.day'
    ]);
    $router->get('reports/month', [
        'as' => 'admin.report.reports.month',
        'uses' => 'ReportsController@month',
        'middleware' => 'can:report.reports.month'
    ]);

    $router->post('reports/pdfByMonth', [
        'as' => 'admin.report.reports.pdfByMonth',
        'uses' => 'ReportsController@pdfByMonth',
    ]);
    $router->get('reports/year', [
        'as' => 'admin.report.reports.year',
        'uses' => 'ReportsController@year',
        'middleware' => 'can:report.reports.year'
    ]);
    $router->post('reports/pdfByYear', [
        'as' => 'admin.report.reports.pdfByYear',
        'uses' => 'ReportsController@pdfByYear',
    ]);
    $router->get('reports/year_range', [
        'as' => 'admin.report.reports.year_range',
        'uses' => 'ReportsController@year_range',
        'middleware' => 'can:report.reports.year_range'
    ]);
    $router->post('reports/pdfByYearRange', [
        'as' => 'admin.report.reports.pdfByYearRange',
        'uses' => 'ReportsController@pdfByYearRange',
    ]);

});
