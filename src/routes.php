<?php

Route::any('robots.txt', function ()
{
	$robots = Orchestra\App::memory()->get('site.robots-txt', '');
	$headers['Content-Type'] = 'text/plain; charset=utf-8';

	return Response::make($robots, 200, $headers);
});
