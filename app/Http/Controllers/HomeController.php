<?php namespace App\Http\Controllers;

use App\Http\Requests;



class HomeController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	$router->get('/', 'HomeController@index');
	|
	*/

	/**
	 * @Get("/", as="home")
	 */
	public function index()
	{

	
	
		return view('home');
	}


	public function monkeyCheck(\App\Http\Requests\MonkeyBananaCheckRequest $request){

		

	}

}
