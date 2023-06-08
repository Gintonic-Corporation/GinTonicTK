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
        <?php $aval="Nem"; if ($film->available==1) $aval = "Igen";?>
		<!-- Wrapper-->
		<div class="box">
			<div class="glass">
				<div class="detailtext">
					<b>Cím:</b> {{$film->title}}<br>
					<b>Rendező:</b> {{$film->director}}<br>
					<b>Főszereplő:</b> {{$film->star}}<br>
					<b>Műfaj:</b> {{$film->category}}<br>
					<b>Adathordozó:</b> {{$film->ptype}}<br>
					<b>Kölcsönözhető:</b> <?php echo $aval ?><br>
					<button class="button-82-pushable" role="button">
						<span class="button-82-shadow"></span>
						<span class="button-82-edge"></span>
						<span class="button-82-front text">
						<a href="/film" id="decc">Vissza</a>
						</span>
					</button>
				</div>
			</div>
		</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
