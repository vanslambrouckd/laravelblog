<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);
        //enable route model binding
        //Route::model(); //Route::model() = facade

        /*
         * indien route model binding niet werkt,
         *  moet je php artisan optimize --force uitvoeren
         *
         * ondertaande zort dat je ArticlesController\show(Article $article) kan uitvoeren
         * ipv id door te geven
         */
        //$router->model('articles', 'App\Article'); //find($id)

        //indien je iets anders dan find via id wil:

        $router->bind('articles', function($id) {
            return \App\Article::published()->findOrFail($id);
        });


        $router->bind('tags', function($name) {
            return \App\Tag::where('name', $name)->firstOrFail();
        });
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php'); //routes worden vanuit routes.php geladen
		});
	}

}
