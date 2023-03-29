<?php
    function linkResource($rel, $href) {
        echo "<link rel='{$rel}' href='{$href}'>";
    }
?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Login</title>        
        
        <?php linkResource("stylesheet", "GinTonicTK/resources/css/login.css"); ?>
    </head>
    <body>
        <h1>GinTonicTK</h1>
        <h2>Bejelentkezés</h2>
        <form action="/login" method="POST">
            @csrf
            <label for="email">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>