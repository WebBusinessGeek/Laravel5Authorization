<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');


$router->resource('monkey', 'MonkeyController');


$router->resource('banana', 'BananaController');


$router->get('/createMonkeys', function(){

	//create monkeys
	$monkeysArray = [];
	$monkeyNameBox = [

		'kevin', 
		'P.Diddy',
		'Tito',
		'Deadmaus',
		'Professor G.',


	];
	$monkeyIdBox = [

		148492,
		358439,
		202349,
		203495,
		123898,


	];
	for($i = 0; $i < count($monkeyNameBox); $i++){
		$monkey = new monkey($monkeyNameBox[$i], $monkeyIdBox[$i]);
		array_push($monkeysArray, $monkey);
	}

	//create bananas
	return Session::put('monkeys', $monkeysArray). Session::put('message', 'monkeys are stored');

	

});

$router->get('/check', function(){

	// if(Session::has('monkeys')){
	// 	return Session::get('monkeys');
	// }
	// else{
	// 	return 'monkeys not here';
	// }

	if(Session::has('message')){
		return Session::get('message');
	}
});





//create monkey class

class monkey {

	//constructor function
	public function __construct($name, $id){

		$this->name = $name;

		$this->id = $id;
	}

	//the monkeys name
	public $name;

	//the monkeys unique id
	public $id;
}




//create banana class


class banana {

	//what number banana is it?
	public $number;

	//who is the owner of the banana?
	public $monkeyId;
}

