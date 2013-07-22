<?php namespace Robotix;

use Illuminate\Support\ServiceProvider;

class RobotixServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
	/**
     * Bootstrap the application events.
     *
     * @return void
     */
	public function boot()
	{
		$this->package('crynobone/robotix', 'robotix', __DIR__.'/../');
		
		require_once __DIR__.'/../start.php';
		require_once __DIR__.'/../routes.php';
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
