@extends("app")
@section("content")
    <div class="row">
        <h1 class="small-12 heading column">Edit Post: {{ $post->title }}</h1>
    </div>

    {!! Form::model($post, ["method" => "patch", "action" => ["PostsController@update",$post->id]]) !!}
        @include("posts.partials.post_form",["submitText"=>"Edit Post"])
    {!! Form::close() !!}
@stop
