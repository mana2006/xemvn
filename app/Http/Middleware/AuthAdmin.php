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

    public function terminate($request, $response)
    {
        $dir = '../vagrant/Code/xemvn/storage/logs/login.log';
        if (!is_dir($dir)) {
            mkdir($dir);
            $myfile = fopen($dir, "w");
            $content = '['.date('Y-m-d H:i:s').']' . $request->name. "had login";
            fwrite($myfile, $content);
            fclose($myfile);
        } else {
            $myfile = fopen($dir, "w");
            $content = '['.date('Y-m-d H:i:s').']' . $request->name. "had login";
            fwrite($myfile, $content);
            fclose($myfile);
        }
    }
}
