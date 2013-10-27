<?php namespace Robotix;

use Illuminate\Support\ServiceProvider;

class RobotixServiceProvider extends ServiceProvider
{
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
        $path = realpath(__DIR__.'/../');

        $this->package('crynobone/robotix', 'robotix', $path);

        require_once "{$path}/start/global.php";
        require_once "{$path}/routes.php";
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
