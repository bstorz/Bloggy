@extends("app")
@section("content")

    <div id="post-show" class="row page-wrapper">
        <section class="small-12 columns">
            <article class="post show">
                <header class="row">
                    <div class="small-8 columns">
                        <h1 class="title"><a href="{{ action("PostsController@show", [$post->id]) }}">{{ $post->title }}</a></h1>
                        <div class="information">Written by
                            <a href="{{ action("AuthorsController@show", [$post->author->id]) }}" rel="author">{{ $post->author->first_name }} {{ $post->author->last_name }}</a> on {{ $post->created_at }}
                        </div>
                    </div>
                    <ul class="small-4 columns controls-panel button-group radius">
                        <a href="{{ action("PostsController@edit", [$post->id]) }}" class="small button">Edit Post</a>
                        {!! Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id],"class"=>"controls")) !!}
                        <button type="submit" class="small alert button">Delete Post</button>
                        {!! Form::close() !!}
                    </ul>
                </header>
                <div class="content">{!! $post->content !!}</div>
            </article>
        </section>
    </div>
    <div class="row">
        <section class="comments small-12 columns">
            <h1 class="title">Comments</h1>

            @if (count($post->comments) == 0)
            <div>No one has commented.  Why don't you be the first?</div>
            @endif
            @foreach ($post->comments as $comment)
            <article class="comment">
                <header>
                    On {{ $comment->created_at }}, <a href="{{ action("AuthorsController@show", [$post->author->id]) }}"> {{ $comment->author->first_name }} {{$comment->author->last_name}}</a> writes:
                </header>
                <div>{!! $comment->content !!}</div>

                {!! Form::open(array('method' => 'delete', 'action' => ['CommentsController@destroy', $comment->id],"class"=>"delete-comment")) !!}
                <button type="submit" class="tiny radius button alert">Delete Comment</button>
                {!! Form::close() !!}
            </article>
            @endforeach
        </section>
    </div>
    <div class="row">
        <section id="new-comment" class="small-12 columns">
            {!! Form::open(["action" => ["CommentsController@store"]]) !!}
                {!! Form::hidden('post_id', $post->id) !!}
                @include("comments.partials.comment_form",["submitText"=>"Create Comment"])
            {!! Form::close() !!}
        </section>
    </div>
@stop
