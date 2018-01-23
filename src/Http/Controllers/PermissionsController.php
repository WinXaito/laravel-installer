<?php

namespace WinXaito\LaravelInstaller\Controllers;

/**
 * @author WinXaito
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;


class PermissionsController extends Controller{
    /**
     * Show the application welcome screen to the user.
     */
    public function show(){
        return view('vendor.winxaito.laravel-installer.front.permissions');
    }

    /**
     * Save the respond and go to next step
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function next(Request $request){
        Session::put('LaravelInstaller_install_route', 'installer.env');
        return redirect(route('installer.env'));
    }
}