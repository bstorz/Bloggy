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
    <h1 class="heading small-12 column">Log In</h1>
</div>
{!! Form::open(["action" => ["Auth\AuthController@postLogin"],"class"=>"login-form"]) !!}
    {!! csrf_field() !!}
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
        <div class="small-12 column">
            {!! Form::checkbox('remember', '') !!}
            {!! Form::label("remember","Remember Me") !!}
        </div>
    </div>
    <div class="row">
    	<div class="small-12 column">
    		{!! Form::submit("Login", ["class"=>"small radius button"]) !!} or <a href="{{ action("Auth\AuthController@getRegister") }}">Sign Up</a> for a new account
    	</div>
    </div>
</form>
{!! Form::close() !!}
@stop
