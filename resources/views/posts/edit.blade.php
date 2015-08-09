@extends("app")
@section("content")
    <h1>Edit Post: {{ $post->title }}</h1>

    {!! Form::model($post, ["method" => "patch", "action" => ["PostsController@update",$post->id]]) !!}
        @include("posts.partials.post_form",["submitText"=>"Edit Post"])
    {!! Form::close() !!}


@stop
