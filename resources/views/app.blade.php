<!DOCTYPE HTML>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Bloggy</title>

        {!! Html::style('css/normalize.css') !!}
        {!! Html::style('css/foundation.css') !!}
	    {!! Html::style('css/app.css') !!}
        <link href='http://fonts.googleapis.com/css?family=Catamaran:100' rel='stylesheet' type='text/css'>
        <!-- wysihtml core javascript with default toolbar functions -->

        {!! Html::script('js/vendor/wysihtml5/wysihtml5x-toolbar.min.js') !!}
        {!! Html::script('js/vendor/wysihtml5/advanced_and_extended.js') !!}

        {!! Html::script('js/vendor/modernizr.js') !!}
    </head>
    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1 class="logo"><a href="/">Bloggy.dev</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                    <li @if (Request::is('posts*')) class="active" @endif><a href="{{ action("PostsController@index") }}">Posts</a></li>
                    <li @if (Request::is('authors*')) class="active" @endif><a href="{{ action("AuthorsController@index") }}">Authors</a></li>
                    <li class="has-dropdown">
                        <a href="#"> @if (Auth::check()) {{ Auth::user()->first_name }} @else Guest @endif </a>
                        <ul class="dropdown">
                            @if (Auth::check())
                            <li><a href="{{ action("Auth\AuthController@getLogout") }}">Log Out</a></li>
                            @else
                            <li><a href="{{ action("Auth\AuthController@getLogin") }}">Log In</a></li>
                            <li><a href="{{ action("Auth\AuthController@getRegister") }}">Register</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </section>
        </nav>
        <div class="row notifications">
            @if (Session::has("flash_message"))
                <div data-alert class="alert-box success radius small-12"> {{ Session::get("flash_message") }} </div>
            @endif
        </div>

        @yield('content')

        <footer class="page-footer">
            <div class="row">
                <div class="small-12 columns">
                    <div>Copyright &copy; 2015 Bloggy, Inc.</div>
                    <div>A Subsidiary of Not Real Co.</div>
                </div>
            </div>
        </footer>


        <div class="editor" data-placeholder="Go on, start editing..."></div>
        {!! Html::script('js/vendor/jquery.min.js') !!}
        {!! Html::script('js/foundation.min.js') !!}
        {!! Html::script('js/foundation.topbar.js') !!}
        <script>
            $(document).foundation();
            var editor = new wysihtml5.Editor(document.querySelector('.wysiwyg'), {
                toolbar: document.querySelector('.toolbar'),
                parserRules:  wysihtml5ParserRules // defined in file parser rules javascript
            });
        </script>
    </body>
</html>
