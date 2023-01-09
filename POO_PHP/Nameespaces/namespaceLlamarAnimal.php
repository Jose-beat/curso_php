<?php
    namespace Animal\Perro;
    include "namespaceLlamarPerro.php";


    const NOMBRE = "Perro";
    function comer(){
        print "Estoy comiendo, perro<br>";

    }

    class Pasear{
        static function paseo(){
            
            print "Estoy paseando, perro<br>";

        }
    }

    comer();
    Pasear::paseo();
    print NOMBRE."<br>";

    //nombre no cualificado
    salchicha\comer();
    salchicha\Pasear::paseo();
    print salchicha\nombre."<br>";

  //nombre completamente cualificado
  \Animal\Perro\salchicha\comer();
  \Animal\Perro\salchicha\Pasear::paseo();
  print salchicha\nombre."<br>";

  

?>