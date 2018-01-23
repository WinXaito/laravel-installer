<?php

namespace WinXaito\LaravelInstaller;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::group(['prefix' => 'install', 'middleware' => ['web', 'WinXaito\LaravelInstaller\Middleware\Installation']], function() {
    Route::get('', 'HomeController@show')->name('installer.home');
    Route::post('', 'HomeController@next')->name('installer.home.next');

    Route::get('requirements', 'RequirementsController@show')->name('installer.requirements');
    Route::post('requirements', 'RequirementsController@next')->name('installer.requirements.next');

    Route::get('permissions', 'PermissionsController@show')->name('installer.permissions');
    Route::post('permissions', 'PermissionsController@next')->name('installer.permissions.next');

    Route::get('env', 'EnvController@show')->name('installer.env');
    Route::post('env', 'EnvController@next')->name('installer.env.next');

    Route::get('resume', 'ResumeController@show')->name('installer.resume');
    Route::post('resume', 'ResumeController@next')->name('installer.resume.next');

    Route::get('finish', 'FinishController@show')->name('installer.finish');
    Route::post('finish', 'FinishController@next')->name('installer.finish.next');
});

Route::get('installer/reset', function(){
    Session::flush();
    Session::save();
    return redirect(route('installer.home'));
})->middleware('web');