<?php
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


?>