<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Orchestra\Support\Facades\App;

Route::any('robots.txt', function ()
{
	$robots = App::memory()->get('site.robots-txt', '');
	$headers['Content-Type'] = 'text/plain; charset=utf-8';

	return Response::make($robots, 200, $headers);
});
