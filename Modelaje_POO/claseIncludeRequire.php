<?php
    //Inclusion de archivos externos 
    require_once "clases/Gato.php";
    require_once "clases/GatoVolador.php";
       
        
        $cucho = new Gato("Cucho", "Rosa");
        $benito = new GatoVolador("Cucho", "Azul");
        print $cucho->nombre." maulla asi ".$cucho->maullar()."<br>";
        print $benito->nombre." maulla asi ".$benito->maullar()."<br>";

        
        print Gato::EDAD;
    
?>