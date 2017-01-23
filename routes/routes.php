<?php

Route::group(['prefix' => 'profiler', 'namespace' => 'AlanVaill\LaravelProfilerAdmin\Http\Controllers'], function ()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    \Route::get('/', 'DashboardController@indexAction')->name('profiler-admin.dashboard');

    \Route::get('/errorLog', 'ErrorLogController@indexAction')->name('profiler-admin.errorLog');

    \Route::get('/transactions', 'TransactionController@indexAction')->name('profiler-admin.transactions');
    \Route::get('/transactions/{label}', 'TransactionController@labelAction')->name('profiler-admin.transactions-by-label');
    \Route::get('/transactions/detail/{id}', 'TransactionController@detailAction')->name('profiler-admin.transactions-detail');

    \Route::get('/queries', 'QueryController@indexAction')->name('profiler-admin.queries');
    \Route::get('/queries/{hash}', 'QueryController@hashAction')->name('profiler-admin.queries-by-hash');
});

