<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');
        
        if (in_array($locale, ['en', 'my'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }
        
        return $next($request);
    }

}
