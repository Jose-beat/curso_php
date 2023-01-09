<?php
    $texto = "";

    if(empty($texto)){
        $texto =  strtoupper("Texto de relleno");
        
        echo "<strong>($texto)</strong>";

    }else{
        
        echo "Esta rellena";

    }

?>