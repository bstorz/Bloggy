@extends("app")
@section("content")
    <div class="row">
        <h1 class="small-12 heading column">Create Post</h1>
    </div>
    {!! Form::open(["action" => ["PostsController@store"]]) !!}
        @include("posts.partials.post_form",["submitText"=>"Create Post"])
    {!! Form::close() !!}
@stop
