@extends("app")
@section("content")

@if (count($errors) > 0)
<div class="row">
	<div class="alert-box alert radius small-12">
		There were some problems with your input.<br><br>
		<ul>
		     @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		     @endforeach
	     </ul>
	</div>
</div>
@endif

<div class="row">
    <h1 class="heading small-12 column">Register</h1>
</div>
{!! Form::open(["action" => ["Auth\AuthController@postRegister"],"class"=>"login-form"]) !!}
    {!! csrf_field() !!}

    <div class="row">
        <div class="small-2 columns">
            {!! Form::label("first_name","First Name") !!}
        </div>
        <div class="small-10 columns">
              {!! Form::text("first_name", null, ["placeholder"=>"First Name"]) !!}
        </div>
    </div>
    <div class="row">
    	<div class="small-2 columns">
    		{!! Form::label("last_name","Last Name") !!}
        </div>
        <div class="small-10 columns">
              {!! Form::text("last_name", null, ["placeholder"=>"Last Name"]) !!}
        </div>
    </div>
    <div class="row">
    	<div class="small-2 columns">
    		{!! Form::label("email","Email Address") !!}
        </div>
        <div class="small-10 columns">
              {!! Form::text("email", null, ["placeholder"=>"Email Address"]) !!}
        </div>
    </div>
    <div class="row">
    	<div class="small-2 columns">
    		{!! Form::label("password","Password") !!}
        </div>
        <div class="small-10 columns">
              {!! Form::password("password", null, ["placeholder"=>"Password"]) !!}
        </div>
    </div>
    <div class="row">
    	<div class="small-2 columns">
    		{!! Form::label("password_confirmation","Confirm Password") !!}
        </div>
        <div class="small-10 columns">
              {!! Form::password("password_confirmation", null, ["placeholder"=>"Confirm Password"]) !!}
        </div>
    </div>
    <div class="row">
        <div class="small-12 column">
            {!! Form::submit("Register and Login", ["class"=>"small radius button"]) !!}
        </div>
    </div>
{!! Form::close() !!}
@stop
