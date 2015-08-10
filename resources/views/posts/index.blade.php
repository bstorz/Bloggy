@extends("app")
@section("content")
    <div class="row">
        <h1 class="heading small-6 column">Latest Posts</h1>
        <div class="heading small-6 column controls-panel">
            <a href="{{ action("PostsController@feed") }}" class="small radius button">JSON Feed</a>
            <a href="{{ action("PostsController@create") }}" class="small radius button">Create New Post</a>
        </div>
    </div>
    @include('posts.partials.post_excerpt_list',['posts' => $posts])
    @include('pagination.default', ['paginator' => $posts])
@stop
