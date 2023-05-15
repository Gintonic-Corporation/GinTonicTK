<!DOCTYPE html> 
<html>
    <head>
		<title>GinTonicTK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		{{-- <link rel="icon" href="public/favicon.ico" type="image/x-icon"/> --}}
		{{-- <link rel="stylesheet" href="resources/css/main.css" /> --}}
		<noscript><link rel="stylesheet" href="resources/css/noscript.css" /></noscript>
        @vite('resources/css/main.css')
        <script src="login.js"></script>
	</head>
        
    <body class="is-preload">
    <h1 id="cim">GinTonicTK</h1>
    <!-- Wrapper-->
        <div id="wrapper">			

            <!-- Main -->
                <div id="loginform">

                
                
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" id="username" name="username" placeholder="Felhasználónlév">
                    <br><br>
                    <input type="password" id="password" name="password" placeholder="Jelszó">
                    <br><br>
                    <button type="submit">Bejelentkezés</button>
                    <button onClick="clear_fields()">törlés</button>
                </form>

                </div>

            <!-- Footer -->
                @include('includes._footer')

        </div>

    <!-- Scripts -->
        @include('includes._scripts')

	</body>

   
</html>