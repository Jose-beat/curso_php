<?php
    class Gato
    {
        protected $nombre;
        private $colorPelo;
        private $corbata = "SI";

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


        //los metodos magicos Get y Set nos ayudan a implementar getters y setters sin realizar mucho codigo
        function  __set($name, $valor){
            print "La propiedad ". $name . "Se actualizo a ".$valor."<br>";
            if($name == "corbata"){
                
            } 
            $this->$name = $valor;
        }

        function __get($name){
            return $this->$name;
        }

        function setCorbata($c = "SI"){
            if($c!="SI")
            {
                $corbata = "NO";

            }
            $this->corbata = $c;
        }

        function getCorbata(){
            return $this->corbata;
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

    // $cucho->setCorbata("NO");
    $cucho->corbata = "NO";
    print $cucho->tieneCorbata();

    $benito->setCorbata("SI");
    print $benito->tieneCorbata();


    unset($cucho);
    unset($benito);

?>