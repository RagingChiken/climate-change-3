<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocalizationMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->get('lang', session('locale', 'id'));
        if (in_array($locale, ['en', 'id'])) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}