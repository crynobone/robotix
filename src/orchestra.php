<?php

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
	$robots = Orchestra\Resources::make('robotix', array(
		'name'    => 'Robots.txt',
		'uses'    => 'Robotix\ApiController',
		'visible' => function ()
		{
			return (Orchestra\App::acl()->can('manage orchestra'));
		},
	));
});
