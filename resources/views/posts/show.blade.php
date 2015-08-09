@extends("app")
@section("content")
    <h1>Bloggy Posts</h1>
    {!! Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id])) !!}
    <button type="submit" >Delete Post</button>
    {!! Form::close() !!}
    <article>
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}</div>
    </article>

    <h1>Comments</h1>

    @foreach ($post->comments as $comment)
    <article>
        <div>{{ $comment->content }}</div>
        <div>Written by {{ $comment->author->first_name }} {{$comment->author->last_name}}</div>
        {!! Form::open(array('method' => 'delete', 'action' => ['CommentsController@destroy', $comment->id])) !!}
        <button type="submit" >Delete Comment</button>
        {!! Form::close() !!}
    </article>
    <hr />
    @endforeach

    {!! Form::open(["action" => ["CommentsController@store"]]) !!}
        {!! Form::hidden('post_id', $post->id) !!}
        @include("comments.partials.comment_form",["submitText"=>"Create Comment"])
    {!! Form::close() !!}
@stop
