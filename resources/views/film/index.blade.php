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

						<a href="/film/create">NEW</a>
<table>
    <tr>
        <th>ID</th>
        <th>Cím</th>
        <th>Rendező</th>
        <th>Főszereplő</th>
        <th>Műfaj</th>
        <th>Adathordozó típusa</th>
        <th>Kölcsönözhető</th>
        <th>Options</th>
    </tr>

    @foreach($films as $film)
    <?php $aval="Nem"; if ($film->available==1) $aval = "Igen";?>
    <tr>
        <td>{{$film->id}}</td>
        <td><a href="/film/{{$film->id}}">{{$film->title}}</a></td>
        <td>{{$film->director}}</td>
        <td>{{$film->star}}</td>
        <td>{{$film->category}}</td>
        <td>{{$film->ptype}}</td>
        <td><?php echo $aval ?></td>
        <td> <a href="/film/{{$film->id}}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>

					</div>

				<!-- Footer -->
					@include('includes._footer')

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
