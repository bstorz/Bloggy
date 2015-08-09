@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
	     @foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	     @endforeach

     </ul>
</div>
@endif

<div class="formGroup">
{!! Form::label("content","Content") !!}
{!! Form::textarea("content", null, ["class"=>"form-control"]) !!}
</div>

<div class="formGroup">
{!! Form::submit($submitText, ["class"=>"btn btn-primary form-control"]) !!}
</div>
