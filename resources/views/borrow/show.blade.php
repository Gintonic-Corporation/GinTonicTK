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

				<p>Kölcsönző azonosítója: {{$borrow->customerID}}</p>
                <p>Film azonosítója: {{$borrow->filmID}}</p>
                <p>Kiadva: {{$borrow->out}}</p>
                <p>Visszahozva: {{$borrow->in}}</p>
                <p><a href="/borrow">Vissza</a></p>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
