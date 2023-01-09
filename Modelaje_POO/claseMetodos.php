<?php
    class Gato{
        private $nombre;
        private $pelo;

        function __construct($nombre, $color){
            $this->nombre = $nombre;
            $this->pelo = $color;

        }
        //Metodo magico que pasa nuestra instancia a una cadena
        // public function __toString()
        // {
        //     return "Mi nombre es ".$this.nombre."y el color de mi pelo es ".$this->pelo."<br>";

        // }

        public function __call($name, $argumentos){
            return $this->$name;

        }
    }

    $benito = new Gato("Benito", "Azul");
    // print $benito;
    print $benito->nombre()."<br>";
    print $benito->pelo()."<br>";
    // print $benito->color()."<br>";


    //Verificacion de la existencia de una clase 

    function __autoload($clase){
        include($clase.".php");

        if(!class_exists($clase, false)){
            trigger_error("No se puede cargar la clase ".$clase, E_USER_WARNING);

        }
    }
    if(class_exists("clases/Gato")){
        $benito = new Gato();
    }

 



?>