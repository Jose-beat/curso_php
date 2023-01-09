<?php
    echo "<h1>Tablas de multiplicar</h1>";


    function tabla($numero, $html = null){
        $tabla  = "";
        

        for($i = 1; $i <= 10; $i++){
            $cuenta = $i*$numero;
   
            $tabla .= "{$i} x {$numero} = {$cuenta} <br/>";

        }   

        if($html != null){
            echo "<h3>Tabla del numero {$numero}</h3>";
            echo $tabla;

        }

        
        return $tabla;

    }




    for($i = 1; $i <= 10; $i++){
      
        echo tabla($i, true);
    }

?>