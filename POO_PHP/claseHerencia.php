<?php
    class Gato
    {
        var $nombre;
        var $colorPelo;
        var $corbata;

        //Generacion de Constructor de la clase
        function __construct($nombre=" ", $pelo="negro")
        {
            $this->nombre = $nombre;
            $this->colorPelo = $pelo;


        }

        function __destruct()
        {
            print $this->nombre."El destructor dice: 'Adios mundo cruel'"."<br>";
        }


        function maullar()
        {
            return "miau"."miau";
        }

        function tieneCorbata()
        {
            return $this->nombre." ".$this->corbata." tiene corbata y el color de su cabello es ".$this->colorPelo."<br>";
        }

        //Uso de propiedades usadas en  constructur
        function saludo()
        {
            $cadena = "Hola, me llamo ".$this->nombre." y mi color de pelo es ";
            $cadena .= $this->colorPelo;
            return $cadena;
        }



    }

    class GatoVolador extends Gato {

    }

    $cucho = new Gato("Cucho", "Rosa");
    $benito = new GatoVolador("Benito", "Azul");

    print $cucho->saludo()."<br>";
    print $benito->saludo()."<br>";

    unset($cucho);
    unset($benito);

    print "El pariente de la clase Gato es ". get_parent_class("Gato")."<br>";
    print "El pariente de la clase GatoVolador es ". get_parent_class("GatoVolador")."<br>";

    print "<br>";
    print is_subclass_of("Gato", "GatoVolador")?"Si" : "No";
    print "<br>";
    print is_subclass_of("GatoVolador", "Gato")?"Si" : "No";
?>