@extends("app")
@section("content")
    <h1>Bloggy Posts</h1>

    @foreach ($authors as $author)
    <article>
        <h2><a href="{{ action("AuthorsController@show", [$author->id]) }}">{{ $author->first_name }} {{ $author->last_name }}</a></h2>
    </article>
    @endforeach
@stop
