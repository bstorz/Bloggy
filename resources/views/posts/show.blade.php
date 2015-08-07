@extends("app")
@section("content")
    <h1>Bloggy Posts</h1>

    <article>
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}</div>
    </article>
@stop
