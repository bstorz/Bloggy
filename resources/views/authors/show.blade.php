@extends("app")
@section("content")
    <h1>{{ $author->first_name }} {{ $author->last_name}}</h1>
    <h2>Posts</h2>
    @foreach ($author->posts as $post)
    <article>
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}</div>
    </article>
    @endforeach

    <h2>Comments</h2>

    @foreach ($author->comments as $comment)
    <article>
        <div>{{ $comment->content }}</div>
        <div>Commented on: {{ $comment->post->title }}</div>
    </article>
    <hr />
    @endforeach
@stop
