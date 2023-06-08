
<!DOCTYPE HTML>
<html>
	<head>
		<title>GinTonicTK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		{{-- <link rel="icon" href="public/favicon.ico" type="image/x-icon"/> --}}
		{{-- <link rel="stylesheet" href="resources/css/main.css" /> --}}
		<noscript><link rel="stylesheet" href="resources/css/noscript.css" /></noscript>
        <script src="clr.js"></script>
        @vite('resources/css/main.css')
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">
            <div class="box">
                <div class="glass2">
                    <form action="/film" method="post" id="Form">
                        @csrf
                        <label for="title">Cím: </label>
                        <input type="text" name="title" id="title">
                        <label for="director">Rendező: </label>
                        <input type="text" name="director" id="director">
                        <label for="star">Főszereplő: </label>
                        <input type="text" name="star" id="star">
                        <label for="category">Műfaj: </label>
                        <input type="text" name="category" id="category">
                        <label for="ptype">Adathordozó: </label>
                        <label class="container2">Videokazetta
                            <input name="ptype" type="radio" value="Videokazetta">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container2">CD/DVD
                            <input name="ptype" type="radio" value="CD/DVD" checked>
                            <span class="checkmark"></span>
                        </label>
                        <br>
                        <! input type="submit" value="Mentés">
                        <button class="button-82-pushable"role="button" value="Mentés">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">Mentés
                            </span>
                        </button>
                        <button class="button-82-pushable" value="clear" onclick="clear()">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text">Törlés
                            </span>
                        </button>
                    </form>
                </div>
            </div>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
