<?php

//use Illuminate\Support\Facades;

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


//bootstrap the session data
$router->get('/', function(){

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
	$bananasArray = [];
	$bananaNumBox = [
		1,
		2,
		3,
		4,
		5
	];

	$bananaOwnerBox = [
		148492,
		358439,
		202349,
		203495,
		123898,
	];
	for($i = 0; $i < count($bananaNumBox); $i++){
		$banana = new banana($bananaNumBox[$i], $bananaOwnerBox[$i]);
		array_push($bananasArray, $banana);
	}


	return Session::put('monkeys', $monkeysArray). Session::put('bananas', $bananasArray).Redirect::to('/home');


});


$router->get('/home', 'HomeController@index');


$router->post('/monkey', ['as' => 'monkey.check', 'uses' => 'HomeController@monkeyCheck']);



/*
* Create the classes 
* needed for example
* to work properly
*/

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

	//constructor function
	public function __construct($number, $id){

		$this->number = $number;

		$this->monkeyId = $id;
	}

	//what number banana is it?
	public $number;

	//who is the owner of the banana?
	public $monkeyId;
}

