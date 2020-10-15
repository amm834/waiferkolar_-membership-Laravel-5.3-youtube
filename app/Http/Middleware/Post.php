<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Post
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next) {
    if (Auth::check()) {
      
      $user = Auth::user();
      if ($user->hasRole('Manager')) {
        return $next($request);
      } elseif ($user->hasRole('PostCreator')) {
        return $next($request);
      } else {
        return redirect('/');
      }
      
    } else {
      return redirect('/');
    }
    return $next($request);
  }
}