<?php

use Illuminate\Support\Facades\Event;
use Orchestra\Support\Facades\App;
use Orchestra\Support\Facades\Resources;

/*
|--------------------------------------------------------------------------
| Register Robotix as Orchestra Resources
|--------------------------------------------------------------------------
|
| Wait for `orchestra.started` to add this event.
|
*/

Event::listen('orchestra.started: admin', function ()
{
	$robots = Resources::make('robotix', array(
		'name'    => 'Robots.txt',
		'uses'    => 'Robotix\ApiController',
		'visible' => function ()
		{
			return (App::acl()->can('manage orchestra'));
		},
	));
});
