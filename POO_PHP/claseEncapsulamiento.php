<?php
    class Gato
    {
        protected $nombre;
        private $colorPelo;
        private $corbata;

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
        function nombreGatoVolador(){
            return $this->nombre;
        }
    }

    $cucho = new Gato("Cucho", "Rosa");
    $benito = new GatoVolador("Benito", "Azul");

    print $cucho->saludo()."<br>";
    print $benito->saludo()."<br>";

    print $cucho->maullar()."<br>";
    print $benito->nombreGatoVolador();
    unset($cucho);
    unset($benito);

?>