@extends("app")
@section("content")
    <div class="row">
        <div class="small-12 columns">
            <h1 class="heading">All Authors</h1>

            @foreach ($authors as $author)
            <article class="author-listing">
                <div class="title"><a href="{{ action("AuthorsController@show", [$author->id]) }}">{{ $author->first_name }} {{ $author->last_name }}</a></div>
                <div>Joined on {{ $author->created_at }}</div>
            </article>
            @endforeach
        </div>
    </div>
@stop
