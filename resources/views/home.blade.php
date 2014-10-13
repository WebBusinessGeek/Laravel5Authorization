<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 Authorization Example</title>

    <!-- Bootstrap -->
    <link href="angular1.3-bootstrap3.2/bootstrap-twit/css/bootstrap.min.css" rel="stylesheet">
    <link href="angular1.3-bootstrap3.2/bootstrap-twit/css/bootstrap-theme.min.css" rel="stylesheet">

    <style>

    	.emphatic{
    		text-decoration: underline;
    		font-weight: bolder;
    	}


    </style>
    
  </head>
  <body>
  	<div class="container">
   	 <h1>Monkeys & Bananas</h1>


   	 <h3>Check if the monkey has <span class="emphatic">Authorization</span> eat the banana</h3>
   	 
   	 	{!! Form::open(['route'=> ['monkey.check', 5, 6 ] ])  !!}

   	 		<div class="form-group">
	   	 		{!! Form::label('monkey', 'Pick a Monkey: ') !!}

	   	 		<select class="form-control">
	   	 		@foreach(Session::get('monkeys') as $monkey)
	   	 			<option value="{{$monkey->id}}">{{$monkey->name}}</option>
	   	 		@endforeach
		   	 	</select>
		   	 </div>

		   	 <div class="form-group">
	   	 		{!! Form::label('monkey', 'Pick a Banana: ') !!}

	   	 		<select class="form-control">
	   	 		@foreach(Session::get('bananas') as $banana)
	   	 			<option value="{{$banana->monkeyId}}">{{$banana->number}}</option>
	   	 		@endforeach
		   	 	</select>
		   	 </div>

	   	 	{!! Form::submit('sumbit', array('class' => 'btn btn-primary')) !!}

	   	{!! Form::close()!!}
   	 		
   	</div>


    
  </body>
</html>