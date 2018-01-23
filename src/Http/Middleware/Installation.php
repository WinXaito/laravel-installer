<?php

namespace WinXaito\LaravelInstaller\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Installation{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        //Check if is current in an installation

        if(Session::has('LaravelInstaller_install_route')){
            $redirect = null;

            switch(Session::get('LaravelInstaller_install_route')){
                case 'installer.home':
                    $redirect = $this->redirectName($request, ['installer.home', 'installer.home.next']);
                    break;
                case 'installer.requirements':
                    $redirect = $this->redirectName($request, ['installer.requirements', 'installer.requirements.next']);
                    break;
                case 'installer.permissions':
                    $redirect = $this->redirectName($request, ['installer.permissions', 'installer.permissions.next']);
                    break;
                case 'installer.env':
                    $redirect = $this->redirectName($request, ['installer.env', 'installer.env.next']);
                    break;
                case 'installer.resume':
                    $redirect = $this->redirectName($request, ['installer.resume', 'installer.resume.next']);
                    break;
                case 'installer.finish':
                    $redirect = $this->redirectName($request, ['installer.finish', 'installer.finish.next']);
                    break;
            }

            if($redirect != null)
                return $redirect;
        }else{
            Session::put('LaravelInstaller_install_route', 'installer.home');

            if($request->route()->getName() != 'installer.home')
                return redirect(route('installer.home'));
        }

        return $next($request);
    }

    private function redirectName($request, $names){
        if(!in_array($request->route()->getName(), $names))
            return redirect(route($names[0]));

        return null;
    }
}
