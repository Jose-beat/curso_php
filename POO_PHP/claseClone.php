<?php
        class Gato
        {
            const EDAD = 18;
            public static $claveSecreta = "12345";

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
                //print $this->nombre."El destructor dice: 'Adios mundo cruel'"."<br>";
     
            }
            
            public static function mensajeSecreto(){
                return "Haz el bien sin mirar a quien";
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
    
            function setNombre($n="gato"){
                $this->nombre = $n;
            }
             
            function getNombre(){
                return $this->nombre;
            }
            static function despedida(){
                print "Adios mundo cruel"."<br>";
           }

            function maullar()
            {
             //   despedida();
             self::despedida();
                //Invoicacion de propiedades estaticas 
                return "miau"."miau".self::$claveSecreta;
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
    
        //Overriding en PHP con la clase GatoVolador
        class GatoVolador extends Gato {
            function nombreGatoVolador(){
                return $this->nombre;
            }

            function maullar(){
                print parent::maullar()."<br>";

                return "miau miau hdtpm";
            }
        }
        
        $cucho = new Gato("Cucho", "Rosa");
        $benito = new GatoVolador("Cucho", "Azul");
        

        //Copiar Valor

        $a = 10;
        $b = $a;

        //Copiado por referencia
        $panza = clone $cucho;
        $panza->setCorbata("SI");
        $cucho->setCorbata("NO");
        print $panza->tieneCorbata();
        print $cucho->tieneCorbata();
        
        $panza->setNombre("Panza");
        print $panza->tieneCorbata();
        print $cucho->tieneCorbata();



        
       
    
?>