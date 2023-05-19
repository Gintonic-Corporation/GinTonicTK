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
			<div id="wrapper">

				<p>Cím: {{$film->title}}</p>
                <p>Rendező: {{$film->director}}</p>
                <p>Főszereplő: {{$film->star}}</p>
                <p>Műfaj: {{$film->category}}</p>
                <p>Adathordozó: {{$film->ptype}}</p>
                <p>Kölcsönözhető: <?php echo $aval ?></p>
                <p><a href="/film">Vissza</a></p>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
