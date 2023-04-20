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
        <h2>Welcome</h2>
        <form action="views/login.blade.php" method="get">
            <button type="submit">Sign-in</button>
        </form>
    </body>
</html>