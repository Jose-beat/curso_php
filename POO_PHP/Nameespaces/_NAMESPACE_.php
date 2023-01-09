<?php
    namespace Perrito;
    print "***".__NAMESPACE__."***";

    class Ladrar{
        function __construct(){
            print "Guau, Guau <br>";
        }
    }

    $perro = new namespace\Ladrar();

?>