<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Foundation | Welcome</title>
		<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

		<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	</head>

	<body>
>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <div class="content">
            <div class="links">
     <!--            <a href="https://laravel.com/docs">Docs</a> -->
                <a href="https://laracasts.com">Home</a>
                <a href="https://laravel-news.com">Articles</a>
                <a href="https://blog.laravel.com">Contact</a>
                <!-- <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a> -->
            </div>
        </div>


		<div class="callout large primary">
			<div class="row column text-center">
			<h1>Our Blog</h1>
			<h2 class="subheader">Such a Simple Blog Layout</h2>
			</div>
		</div>

		<div class="row medium-8 large-7 columns">
			<div class="blog-post">
				<h3>Awesome blog post title <small>3/6/2015</small></h3>
				<img class="thumbnail" src="https://placehold.it/850x350">
				<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
				<div class="callout">
					<ul class="menu simple">
						<li><a href="#">Author: Mike Mikers</a></li>
						<li><a href="#">Comments: 3</a></li>
					</ul>
				</div>
			</div>
		</div>

		@yield('content')

		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
		<script>
	      $(document).foundation();
	    </script>
	</body>
</html>