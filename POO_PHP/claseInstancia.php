<?php
    class Gato
    {
        function maullar(){
            return "miau"." "."miau";

        }
    }


    $cucho = new Gato();
    $benito = new Gato();
    $demostenes = new Gato();


    print "Demostenes pertenece a la clase ".get_class($demostenes)."<br>";


    //Verificar que la instancia pertenezca a determinada clase
    print "Cucho";

    if(is_a($cucho, "Gato")){
        print "Si es un gato"."<br>";

    }
    else
    {
        print "No es un gato"."<br>";

    }

    print "Cucho dice".$cucho->maullar()."<br>";
    print "Benito dice".$benito->maullar()."<br>";
    print "Demostenes dice".$demostenes->maullar()."<br>";

?>