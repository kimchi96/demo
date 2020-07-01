<?php
namespace App\Http\Middleware;
use Closure;
class Cors
{
  public function handle($request, Closure $next)
  {
    return $next($request)
      ->header('Access-Control-Expose-Headers', 'Access-Control-*')
      ->header('Access-Control-Allow-Origin', '*')
      ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
      ->header('Access-Control-Allow-Headers', 'Origin, Accept, X-Requested-With, Content-Type, X-Token-Auth, Authorization')
      ->header('Access-Control-Allow-Credentials', 'true')
      ->header('Allow', 'GET, POST, PUT, DELETE, OPTIONS, HEAD');;
  }
}
