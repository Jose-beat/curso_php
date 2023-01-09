<?php

    $ip = $_SERVER["REMOTE_ADDR"];
    $browser = $_SERVER["HTTP_USER_AGENT"];

    echo "Tu IP es ".$ip;

    if(strstr($browser, "Firefox") == true){
        echo "<h1>El navegador que usas es firefox, ENHORABUENA</h1>";
    }else{
        echo "<p>NO USAS FIREFOX</p>";
    }
?>