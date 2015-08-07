@extends("app")
@section("content")
    <h1>Create Post</h1>
    {!! Form::open(["action" => ["PostsController@store"]]) !!}
        @include("posts.partials.post_form",["submitText"=>"Create Post"])
    {!! Form::close() !!}
@stop
