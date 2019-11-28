<?php

Route::group(['prefix' => 'api/'.config('bus.url_prefix'),'middleware' => config('bus.middleware'),'namespace'=>'SsGroup\BusTracking\App\Http\Controllers\Api'], function () {
    Route::post('but_track','BusTrackController');
    Route::post('but_track/location','BusTrackController@getLocation');
});

Route::group(['prefix' => config('bus.url_prefix'),'as' => config('bus.url_prefix').'.','middleware' => config('bus.middleware'),'namespace'=>'SsGroup\BusTracking\App\Http\Controllers'], function () {
    Route::get('login','AuthController@showLoginForm');
    Route::get('home','HomeController@index');

    Route::get('bus/data','BusController@getData');
    Route::resource('bus','BusController');

    Route::get('route/data','RouteController@getData');
    Route::resource('route','RouteController');

    Route::get('driver/data','DriverController@getData');
    Route::resource('driver','DriverController');

    Route::get('bus_track/map','BusTrackController')->name('bus_track.map');
});
