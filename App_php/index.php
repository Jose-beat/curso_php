<?php
    require_once("session/session.php");
    $session = new Session();

    if($session->stateLogin()){
        header("location:pages/start.php");
    }else{
        header("location:pages/login.php");
    }
?>