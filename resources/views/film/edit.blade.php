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
                    <label for="ptype">Adathordozó: </label>
                    <?php if($film->ptype=="Videokazetta") echo ' <label class="container2">Videokazetta
                            <input name="ptype" type="radio" value="Videokazetta" checked>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container2">CD/DVD
                            <input name="ptype" type="radio" value="CD/DVD">
                            <span class="checkmark"></span>
                        </label>';
                    else echo' <label class="container2">Videokazetta
                    <input name="ptype" type="radio" value="Videokazetta">
                    <span class="checkmark"></span>
                </label>
                <label class="container2">CD/DVD
                    <input name="ptype" type="radio" value="CD/DVD" checked>
                    <span class="checkmark"></span>
                </label>';?>
                    <input type="submit" value="Frissítés" style="float: left">
                </form>
                <form action="/film/{{$film->id}}" method="post">
                    @csrf
                    @method('delete')
                    <?php if($film->available==1) echo'<input type="submit" value="Törlés" style="float: right">'; ?>

                </form>

                </div>
            </div>

		

		<!-- Scripts -->
			@include('includes._scripts')

	</body>
</html>
