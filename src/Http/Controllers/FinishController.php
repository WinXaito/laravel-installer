<?php

namespace WinXaito\LaravelInstaller\Controllers;

/**
 * @author WinXaito
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;


class FinishController extends Controller{
    /**
     * Show the application welcome screen to the user.
     */
    public function show(){
        return view('vendor.winxaito.laravel-installer.front.finish');
    }

    /**
     * Save the respond and go to next step
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function next(Request $request){
        Session::forget('LaravelInstaller_install_route');
        touch(storage_path('app/.install'));
        return redirect('/');
    }
}