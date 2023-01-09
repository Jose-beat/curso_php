<?php
    $gato = new Class(){
       
       function __construct($nombre){
            $this->nombre = $nombre;
       }
        public function getNombre(){
        
            return "Mi nombre es: ".$this->nombre."<br>";
        }
    };

    print $gato->getNombre();



?>