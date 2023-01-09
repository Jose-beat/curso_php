<?php
    echo "<h1>Tablas de multiplicar</h1>";


    function tabla($numero){
        $tabla  = "";
        for($i = 1; $i <= 10; $i++){
            $cuenta = $i*$numero;

            $tabla .= "($i) x ($numero) = ($cuenta) <br/>";
        }   

        return $tabla;

    }

    echo "<h1>Tablas de multiplicar</h1>";

    $num = 5;
    echo tabla($num);

    for($i = 1; $i <= 16; $i++){
        echo "<h3>Tabla del ($i)</h3>";
        echo tabla($i);
    }

?>