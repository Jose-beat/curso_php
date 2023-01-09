<?php
    $array = [ "Uno", "Dos", "Tres", "Cuarenta"];
    
    foreach ($array as $key => $value) {
        //Recorrer y mostrar el array
        print "Clave: ".$key." , Valor: ".$value."<br>";

        
        


        

    
    }

    //Ordenar y mostrar el array
    sort($array);

    foreach($array as $key => $value){
        print "Clave: ".$key." , Valor: ".$value."<br>";
    }


    //Mostrar la longitud del array
    print "Longitud de un array: ".count($array)."<br>";


    //Buscar el vector del array

    $searching  = array_search('Uno', $array);

    print "El elemento tiene la clave ".$searching;



?>