<?php

namespace App\Http\Middleware;

use App\Models\About;
use Closure;
use Illuminate\Http\Request;

class AboutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (About::get()->count() !== 0) {
            return redirect()->route('admin.about.index');
        }
        return $next($request);
    }
}
