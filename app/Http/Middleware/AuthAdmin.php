<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Log;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        return $next($request);
    }

    public function terminate()
    {
        if (!file_exists(storage_path('logs/login'))) {
            mkdir(storage_path('logs/login'));
        }
        $dir = storage_path('logs/login/login_list_'.date('Y_m_d').'.log');
        $myfile = fopen($dir, "a");
        $content = '['.date('Y-m-d H:i:s').'] : ' . Auth::user()->email . " had login\n";
        fwrite($myfile, $content);
        fclose($myfile);
    }
}
