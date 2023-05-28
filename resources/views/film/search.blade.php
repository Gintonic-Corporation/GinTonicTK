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
		<div id="wrapper">
			<div id="main">
                <table>
                    <tr>
                        <th>Cím</th>
                        <th>Rendező</th>
                        <th>Főszereplő</th>
                        <th>Műfaj</th>
                        <th>Darabszám</th>
                        <th>Példányok listázása</th>
                    </tr>

                    @foreach($films as $film)
                    <?php $selectedTitle='%'.$film->title.'%'; $selectedDirector='%'.$film->director.'%'?>
                    <tr>
                        <td>{{$film->title}}</td>
                        <td>{{$film->director}}</td>
                        <td>{{$film->star}}</td>
                        <td>{{$film->category}}</td>
                        <td>{{$film->db}}</td>
                        <td> <a href="/film/result/{{$selectedTitle}}-{{$selectedDirector}}" class="icon solid  fa-film"> Lista </a></td>
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
