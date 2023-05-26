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
			<div class="box">
				<div class="glass">
					<div class="detailtext">
						<b>Név:</b> {{$customer->name}}<br>
						<b>Lakcím:</b> {{$customer->address}}<br>
						<b>Elérhetőség:</b> {{$customer->contact}}<br>
						<b>Kölcsönzések száma:</b> {{$customer->rank}}<br>

						<button class="button-82-pushable" role="button">
						<span class="button-82-shadow"></span>
						<span class="button-82-edge"></span>
						<span class="button-82-front text">
						<a href="/customer" id="decc">Vissza</a>
						</span>
						</button>
					</div>
				</div>
			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
