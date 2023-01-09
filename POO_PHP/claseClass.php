<?php
    class Gato
    {
        function maullar()
        {
            print "El gato dice miau miau";
        }
    }


    //Muestra de clases declaradas (arreglo)

    $classes = get_declared_classes();
    foreach($classes as $clase)
    {
        print $clase."<br>";
    }

    //Verificamos la existencia de la clase
    if(class_exists("Gato"))
    {
        print "La clase Gatos SI existe"."<br>";
    }
    else
    {
        print "La clase Gatos NO existe"."<br>";
    }
?>