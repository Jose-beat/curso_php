<?php
    class Gato{
        public $bandera;
    }

    class Perro{
        public $bandera;
    }

    $gato1 = new Gato();
    $gato2 = new Gato();
    $gato3 = $gato1;

    $perro = new Perro();

    print "Comparamos elementos de la misma clase"."<br>";
    print "gato1 == gato2";
    print ($gato1==$gato2)?"Verdadero":"Falso";
    print "<br>";

    
    print "gato1 != gato2";
    print ($gato1!=$gato2)?"Verdadero":"Falso";
    print "<br>";

    print "gato1 === gato2";
    print ($gato1===$gato2)?"Verdadero":"Falso";
    print "<br>";

    print "gato1 !== gato2";
    print ($gato1!==$gato2)?"Verdadero":"Falso";
    print "<br>";
    print "<br>";

    print "Comparamos elementos de la misma clase"."<br>";
    print "<br>";
    print "gato1 == gato3";
    print ($gato1==$gato3)?"Verdadero":"Falso";
    print "<br>";

    
    print "gato1 != gato3";
    print ($gato1!=$gato3)?"Verdadero":"Falso";
    print "<br>";

    print "gato1 === gato3";
    print ($gato1===$gato3)?"Verdadero":"Falso";
    print "<br>";

    print "gato1 !== gato3";
    print ($gato1!==$gato3)?"Verdadero":"Falso";
    print "<br>";
    print "<br>";

    print "Comparamos elementos de la misma clase"."<br>";
    print "<br>";
    print "gato1 == gato1";
    print ($gato1==$gato1)?"Verdadero":"Falso";
    print "<br>";

    
    print "gato1 != gato1";
    print ($gato1!=$gato1)?"Verdadero":"Falso";
    print "<br>";

    print "gato1 === gato1";
    print ($gato1===$gato1)?"Verdadero":"Falso";
    print "<br>";

    print "gato1 !== gato1";
    print ($gato1!==$gato1)?"Verdadero":"Falso";
    print "<br>";
    print "<br>";
?>