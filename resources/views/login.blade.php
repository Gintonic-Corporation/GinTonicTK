<!DOCTYPE html> 
<html>
    <head>
		<title>GinTonicTK LOGIN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		{{-- <link rel="icon" href="public/favicon.ico" type="image/x-icon"/> --}}
		{{-- <link rel="stylesheet" href="resources/css/main.css" /> --}}
		<noscript><link rel="stylesheet" href="resources/css/noscript.css" /></noscript>
        @vite('resources/css/main.css')
        <script src="login.js"></script>
	</head>
        
    <body class="is-preload">
        <div class="loginheader">
            <h1>GinTonicTK</h1>
        </div>
        <div class="loginmain">
            <form action="/login" method="POST">
                @csrf
                <input type="text" id="username" name="username" placeholder="Felhasználónlév" oninput="return showicon()">
                <br>
                <input type="password" id="password" name="password" placeholder="Jelszó" oninput="return showicon()">
                <br>
                <button type="submit" id="logbutton">Bejelentkezés</button>
                <button type="reset">Törlés</button>
            </form>

        </div>
        <div class="loginfooter"></div> 

	</body>   
</html>