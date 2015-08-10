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
	<div class="small-2 columns">
		{!! Form::label("title","Title") !!}
    </div>
    <div class="small-10 columns">
          {!! Form::text("title", null, ["placeholder"=>"Content"]) !!}
    </div>
</div>
<div class="row">
	<div class="small-offset-2 small-10 columns">
		@include("utilities.toolbar")
	</div>
</div>
<div class="row">
	<div class="small-2 columns">
		{!! Form::label("content","Content") !!}
    </div>
    <div class="small-10 columns">
          {!! Form::textarea("content", null, ["placeholder"=>"Content","class"=>"wysiwyg"]) !!}
    </div>
</div>
<div class="row">
	<div class="small-12 column">
		{!! Form::submit($submitText, ["class"=>"small radius button"]) !!}
	</div>
</div>
