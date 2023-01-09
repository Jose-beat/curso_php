<?php
    require_once("../session/session.php");
    
    require_once("../models/User.php");

    $session = new Session();
    if(isset($_POST["email"])){
        $user = $_POST["email"];
        if(User::searchUser($user)){
            $session->beginLogin($user);
            header("location:start.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="email">Correo</label>
        <input type="text" name="email" id="email"/><br>
        <input type="submit" name="Entrar"/>
    </form>
</body>
</html>