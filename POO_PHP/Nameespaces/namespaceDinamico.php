<?php
    namespace miNamespace;

    class miClase{
        function __construct(){
            print "Hola desde la funcion constructora";

        }
    }

    function miFuncion(){
        print "Hola desde mi funcion<br>";

    }
    const miConstante = "Hola";

    //dinamica
    $a = "miNamespace\miClase";
    $clase  = new $a;
    $b = "miNamespace\miFuncion";
    $b();
    print constant("miNamespace\miConstante");

?>