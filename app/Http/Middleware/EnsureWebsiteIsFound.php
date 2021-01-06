<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\DeclareDeclare;

class EnsureWebsiteIsFound
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->root() != 'https://multisite.berrycom.co.ke')
        {
            $actionName =Route::currentRouteName();
            if ($actionName == 'welcome')
            {
                return redirect()->route('home');
            }
            else
            {
                return $next($request);
            }
        }
        else
        {
            return $next($request);
        }
    }
}
