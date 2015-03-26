<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
    //protected $middleware: middleware hier runt voor iedere request
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode', //php artisan down
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'App\Http\Middleware\VerifyCsrfToken',
        'App\Http\Middleware\Demo'
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */

    //protected $routeMiddleware: hier kan je middleware registreren voor ENKEL bepaalde routes
	protected $routeMiddleware = [
		'auth' => 'App\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
        'manager' => 'App\Http\Middleware\RedirectIfNotManager'
	];

}
