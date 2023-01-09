<?php
    class Gato{
        public $peso = 10;
        private $genero = "M";
        protected $edad = 0;

        function iteracion(){
            foreach ($this as $key => $value) {
                print $key."-> ".$value."<br>";

            }
        }
    }

    $gato = new Gato();
    $gato->iteracion();

    print "<br>"."iteracion fuera de la clase "."<br>";
    foreach($gato as $clave => $valor){
        
        print $clave." -> ".$valor."<br>";

    }
?>