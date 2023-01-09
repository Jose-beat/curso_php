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

    //Instancias

    $cucho = new Gato("Cucho", "Rosa");

    // $cucho->nombre = "Cucho";
    // $cucho->colorPelo = "Rosa";
    // $cucho->corbata = "No";

    print $cucho->nombre." dice ".$cucho->maullar()."<br>";
    print $cucho->tieneCorbata();
    print $cucho->saludo()."<br>";

    unset($cucho);

?>