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
        <div class="glass2">
            <form action="/customer/{{$customer->id}}" method="post">
                @csrf
                @method('put')
                <label for="name">Név: </label>
                <input type="text" name="name" id="name" value="{{$customer->name}}">
                <br>
                <label for="address">Lakcím: </label>
                <input type="text" name="address" id="address" value="{{$customer->address}}">
                <br>
                <label for="contact">Elérhetőség: </label>
                <input type="text" name="contact" id="contact" value="{{$customer->contact}}">
                <br>
                <input type="submit" value="Frissítés">
            </form>

            <form action="/customer/{{$customer->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Törlés">
            </form>


    </div>
</div>

<!-- Scripts -->
    @include('includes._scripts')

</body>
</html>
