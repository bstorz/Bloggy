<section class="posts">
    @if (count($posts) == 0)
    <div class="row">
        <div class="small-12 column">No one has posted.  Why don't you be the first?</div>
    </div>
    @endif
    @foreach ($posts as $post)
    <div class="row">
        <article class="post small-12 columns">
            <header>
                <h1 class="title"><a href="{{ action("PostsController@show", [$post->id]) }}">{{ $post->title }}</a></h1>
                <div class="information">Written by
                    <a href="{{ action("AuthorsController@show", [$post->author->id]) }}" rel="author">{{ $post->author->first_name }} {{ $post->author->last_name }}</a> on {{ $post->created_at }}
                </div>
            </header>
            <div class="excerpt">
                {{ substr($post->content,0,255)."..." }}
            </div>
            <div class="continue"><a href="{{ action("PostsController@show", [$post->id]) }}" class="tiny radius secondary button">Continue Reading...</a></div>
        </article>
    </div>
    @endforeach
</section>
