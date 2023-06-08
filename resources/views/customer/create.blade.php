
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
                <div class="glass3">

				<form action="/customer" method="post">
                    @csrf
                    <label for="name">Név: </label>
                    <input type="text" name="name" id="name">
                    <br>
                    <label for="address">Lakcím: </label>
                    <input type="text" name="address" id="address">
                    <br>
                    <label for="contact">Elérhetőség: </label>
                    <input type="text" name="contact" id="contact">
                    <br>
                    {{-- <label for="rank">Rang: </label>
                    <input type="number" name="rank" id="rank">
                    <br> --}}
                    <!input type="submit" value="Mentés">
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
		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
