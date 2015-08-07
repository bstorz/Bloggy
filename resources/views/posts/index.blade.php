@extends("app")
@section("content")
    <h1>Bloggy Posts</h1>

    @foreach ($posts as $post)
    <article>
        <h2><a href="{{ action("PostsController@show", [$post->id]) }}">{{ $post->title }}</a></h2>
        <div>{{ $post->content }}</div>
    </article>
    @endforeach
@stop
