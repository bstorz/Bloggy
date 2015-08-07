<div class="formGroup">
{!! Form::label("title","Title") !!}
{!! Form::text("title", null, ["class"=>"form-control"]) !!}
</div>

<div class="formGroup">
{!! Form::label("content","Content") !!}
{!! Form::textarea("content", null, ["class"=>"form-control"]) !!}
</div>

<div class="formGroup">
{!! Form::submit($submitText, ["class"=>"btn btn-primary form-control"]) !!}
</div>
