<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Locale
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
    if ($request->method() === 'GET') {
      $segment = $request->segment(1);
      
      if (!in_array($segment, config('app.locales'))) {
        $segments = $request->segments();
        $fallback = session('locale') ?: config('app.fallback_locale');
        array_shift($segments);
        array_unshift($segments, $fallback);
        return redirect()->to(implode('/', $segments));
      }

      session(['locale' => $segment]);
      App::setLocale($segment);
    }

    return $next($request);
  }
}
