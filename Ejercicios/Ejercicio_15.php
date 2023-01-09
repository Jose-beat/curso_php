<?php
    $matriz = array("hola", 2);
    $verdadero = TRUE;
    $texto = "Bienvenido al curso";

    if(is_array($matriz) == true){
        echo "El array es un array<br>";
    }

    if(is_bool($verdadero)){
        echo "El booleano es un booleano<br>";

    }

    if(is_string($texto)){
        echo "El string es un string<br>";
    }
?>