<?php 

namespace KennyRay\YouTube;

use Illuminate\Support\ServiceProvider;

class YouTubeServiceProvider extends ServiceProvider 
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
        __DIR__.'/config/youtube.php' => config_path('youtube.php'),
    ]);
	}
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind("youtube", function(){
                return $this->app->make('KennyRay\YouTube\Youtube', [config('youtube.KEY')]);
            });
		
		$this->app->booting(function(){
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('YouTube', 'KennyRay\YouTube\Facades\YouTube');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}
}