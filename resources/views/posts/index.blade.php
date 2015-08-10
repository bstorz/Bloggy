@extends("app")
@section("content")
    <div class="row">
        <h1 class="heading small-6 column">Latest Posts</h1>
        <ul class="heading small-6 column controls-panel button-group radius">
            <li><a href="{{ action("PostsController@create") }}" class="small  button">Create New Post</a></li>
            <li><a href="{{ action("PostsController@feed") }}" class="small secondary button">JSON Feed</a></li>
        </ul>
    </div>
    @include('posts.partials.post_excerpt_list',['posts' => $posts])
    @include('pagination.default', ['paginator' => $posts])
@stop
