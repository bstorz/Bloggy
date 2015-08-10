@extends("app")
@section("content")

    <div class="row">
        <article class="small-12 columns">
            <h1 class="heading">Posts by {{ $author->first_name }} {{ $author->last_name }}</h1>

            @include('posts.partials.post_excerpt_list',['posts' => $author->posts])
        </article>
    </div>
@stop
