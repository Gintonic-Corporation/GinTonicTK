<!DOCTYPE HTML>
<html>
	<head>
		<title>GinTonicTK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		{{-- <link rel="icon" href="public/favicon.ico" type="image/x-icon"/> --}}
		{{-- <link rel="stylesheet" href="resources/css/main.css" /> --}}
		<noscript><link rel="stylesheet" href="resources/css/noscript.css" /></noscript>
        @vite('resources/css/main.css')
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				@include('includes._nav')

				<!-- Main -->
					<div id="main">

                        <h1>Kölcsönzés nem rögzíthető!</h1>
                        <p>A kiválasztott tag nem vehet ki több filmet, mert túllépte a rangja által engedélyezett limitet!</p>
                        <button class="button-82-pushable" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">
                            <a href="/borrow" id="decc">Vissza</a>
                            </span>
                            </button>
					</div>

				<!-- Footer -->
					@include('includes._footer')

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
