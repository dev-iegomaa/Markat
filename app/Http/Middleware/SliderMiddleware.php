<?php

namespace App\Http\Middleware;

use App\Models\Slider;
use Closure;
use Illuminate\Http\Request;

class SliderMiddleware
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
        if (Slider::get()->count() !== 0) {
            return redirect()->route('admin.slider.index');
        }
        return $next($request);
    }
}
