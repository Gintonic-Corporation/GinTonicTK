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

				<form action="/borrow/{{$borrow->id}}" method="post">
                    @csrf
                    @method('put')
                    <label for="customerID">Kölcsönző azonosítója: </label>
                    <input type="text" name="customerID" id="customerID" value="{{$borrow->customerID}}">
                    <br>
                    <label for="filmID">Film azonosítója: </label>
                    <input type="text" name="filmID" id="filmID" value="{{$borrow->filmID}}">
                    <br>
                    <label for="out">Kiadva: </label>
                    <input type="date" name="out" id="out" value="{{$borrow->out}}">
                    <br>
                    <label for="in">Visszahozva: </label>
                    <input type="date" name="in" id="in" value="{{$borrow->in}}"><br>
                    <input type="submit" value="Frissítés">
                </form>

                <form action="/borrow/{{$borrow->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Törlés">
                </form>

			</div>

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
