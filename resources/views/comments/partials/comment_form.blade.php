@if (count($errors) > 0)
<div class="row">
	<div class="alert-box alert radius small-12 column">
		There were some problems with your input.<br><br>
		<ul>
		     @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		     @endforeach
	     </ul>
	</div>
</div>
@endif
@include("utilities.toolbar")
{!! Form::textarea("content", null, ["size"=>"50x5","class"=>"small-textbox wysiwyg","placeholder"=>"Add Your Comment","aria-label"=>"Add Your Comment"]) !!}
{!! Form::submit($submitText, ["class"=>"button radius"]) !!}
