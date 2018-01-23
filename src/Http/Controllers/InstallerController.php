<?php

namespace WinXaito\LaravelInstaller\Controllers;

/**
 * @author WinXaito
 */

use App\Http\Controllers\Controller;


class InstallerController extends Controller{
    /**
     * Show the application welcome screen to the user.
     */
    public function show(){
        return view('vendor.winxaito.laravel-installer.install', ['wizard' => config('installer.wizard')]);
    }
}