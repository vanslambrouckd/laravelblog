<?php namespace App\Http\Middleware;

use Closure;

class Demo {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        /*
         * php artisan make:middleware Demo
         * http://localhost:8000/articles/create?foo=bar zal redirecten naar /articles
         */
        if ($request->is('articles/create') && $request->has('foo')) {
            die('ja');
            return redirect('articles');
        }

		return $next($request);
	}

}
