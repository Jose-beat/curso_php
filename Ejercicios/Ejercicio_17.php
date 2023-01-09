<?php
    function factorial($numero){
        $resultado = 1;
        for($x=$numero; $x > 0; $x--){
            $resultado *= $x;


        }

        return $resultado;
    }

    echo "<h2>El factorial</h2>";
    $dato = 10^4;
    echo "El factorial de ".$dato." es ".factorial($dato);

?>