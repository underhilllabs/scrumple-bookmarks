<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters) {
		return Response::error('404');
	}
  public function __construct() {
    //styles
    Asset::add('main_style', 'css/app.css');
    Asset::add('bootstrap_style', 'css/bootstrap.min.css');
  }
}
