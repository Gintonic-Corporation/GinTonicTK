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
        @if ($message=Session::get('success'))
            <div class="alert alert-info">{{$message}}</div>
        @endif
        <div class="loginmain">
            <form action="{{route('login.validate_login')}}" method="POST" id="logform">
                @csrf
                <input type="text" id="username" name="name" placeholder="Felhasználónlév">
                @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <br>
                <input type="password" id="password" name="password" placeholder="Jelszó">
                @if($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
                <br>
                <button type="submit" id="logbutton">Bejelentkezés</button>
                <button type="reset">Törlés</button>
            </form>

        </div>
        <div class="loginfooter"></div>

	</body>
</html>
