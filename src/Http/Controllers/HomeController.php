<?php

namespace WinXaito\LaravelInstaller\Controllers;

/**
 * @author WinXaito
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller{
    /**
     * Show the application welcome screen to the user.
     */
    public function show(){
        return view('vendor.winxaito.laravel-installer.front.home');
    }

    /**
     * Save the respond and go to next step
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function next(){
        Session::put('LaravelInstaller_install_route', 'installer.requirements');
        return redirect(route('installer.requirements'));
    }
}