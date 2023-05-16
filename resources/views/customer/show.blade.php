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

				<p>Név: {{$customer->name}}</p>
                <p>Lakcím: {{$customer->address}}</p>
                <p>Elérhetőség: {{$customer->contact}}</p>
                <p>Rang: {{$customer->rank}}</p>
                <p><a href="/customer">Vissza</a></p>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
