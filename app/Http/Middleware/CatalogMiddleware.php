<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\View;
use App\Model\Contact;
use App\Model\Categories;

class CatalogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        View::share('contact', Contact::find(1));
        View::share('categories', Categories::all());
        return $next($request);
    }
}
