<?php namespace Robotix;

use Illuminate\Routing\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Orchestra\Support\Facades\App;
use Orchestra\Support\Facades\Messages;
use Orchestra\Support\Facades\Site;

class ApiController extends Controller {
	
	/**
	 * Apply filters during construct.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		$this->beforeFilter(function ()
		{
			if ( ! App::acl()->can('manage orchestra'))
			{
				return Redirect::to(resources('/'));
			}
		});
	}

	public function getIndex()
	{
		$memory = App::memory();
		$robots = $memory->get('site.robots-txt', '');

		Site::set('title', 'Robots.txt');

		return View::make('robotix::api', compact('robots'));
	}

	/**
	 * Update robots.txt
	 *
	 * @access public
	 * @return Response
	 */
	public function postIndex()
	{
		$input      = Input::all();
		$rules      = array('robots' => 'required');
		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
			return Redirect::to(handles('orchestra/foundation::resources/robotix'))
				->withInput()
				->withErrors($validation);
		}

		$memory = App::memory();
		$memory->put('site.robots-txt', $input['robots']);

		Messages::add('success', 'Robots.txt has been updated');

		return Redirect::to(handles('orchestra/foundation::resources/robotix'));
	}
}
