<html>
    <head>
        <title>Login</title>        
        <link rel="stylesheet" href="resources/css/login.css" style="stylesheet">
    </head>
    <body>
        <h1>GinTonicTK</h1>
        <h2>Bejelentkezés</h2>
        <form action="/login" method="POST">
            @csrf
            <label for="email">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button type="submit">Login</button>
        </form>
    </body>
</html>