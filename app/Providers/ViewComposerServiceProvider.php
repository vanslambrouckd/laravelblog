<?php namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

/*
 * gemaakt via CLI: php artisan make:provider ViewComposerServiceProvider
 *
 */
class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->composeNavigation();

    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    /*
     * compose the navigation bar
     */
    private function composeNavigation()
    {
        view()->composer('partials.nav', 'App\Http\Composers\NavigationComposer'); //default wordt @compose (=compose functie) gebruikt

        /*
        //when laravel is composing the view partials/nav, execute closure
        view()->composer('partials.nav', function ($view) {
            //zo zorg je dat $latest in iedere view beschikbaar is (goed voor bvb menuitems)
            $view->with('latest', Article::latest()->first());
        });
        */
    }

}
