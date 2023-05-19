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

				<form action="/film/{{$film->id}}" method="post">
                    @csrf
                    @method('put')
                    <label for="title">Cím: </label>
                    <input type="text" name="title" id="title" value="{{$film->title}}">
                    <br>
                    <label for="director">Rendező: </label>
                    <input type="text" name="director" id="director" value="{{$film->director}}">
                    <br>
                    <label for="star">Főszereplő: </label>
                    <input type="text" name="star" id="star" value="{{$film->star}}">
                    <br>
                    <label for="category">Műfaj: </label>
                    <input type="text" name="category" id="category" value="{{$film->category}}">
                    <br>
                    <label for="ptype">Adathordozó: </label><br>
                    <?php if($film->ptype=="Videokazetta") echo '<input type="radio" name="ptype" id="ptype" value="CD/DVD">CD/DVD<br>
                    <input type="radio" name="ptype" id="ptype" value="Videokazetta" checked>Videokazetta<br>';
                    else echo'<input type="radio" name="ptype" id="ptype" value="CD/DVD" checked>CD/DVD<br>
                    <input type="radio" name="ptype" id="ptype" value="Videokazetta">Videokazetta<br>';?>
                    {{-- <input type="radio" name="ptype" id="ptype" value="CD/DVD">CD/DVD<br>
                    <input type="radio" name="ptype" id="ptype" value="Videokazetta">Videokazetta<br> --}}
                    <input type="submit" value="Frissítés">
                </form>

                <form action="/film/{{$film->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Törlés">
                </form>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
