<?php

namespace App\Http\Middleware;

use Closure, Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $languages = ['en','pt-br'];

    public function handle($request, Closure $next)
    {
        if (!Session::has('locale'))
        {
            Session::put('locale', 'pt-br');
        }

        app()->setLocale(Session::get('locale'));
        return $next($request);
    }
}
