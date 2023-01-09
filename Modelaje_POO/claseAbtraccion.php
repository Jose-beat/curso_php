<?php
    abstract class Mamifero{
        //Metodo abstracto
        abstract protected function saludo();
        //Metodo no-abstracto
        public function maullar(){
            return "miau, miau";
        }
    }

    class Gato extends Mamifero{
        public function saludo(){
            return "Hola Mundo";

        }


    }

    $demostenes = new Gato();

    print "Saludo ".$demostenes->saludo()."</br>";
    print "Maullar ".$demostenes->maullar()."</br>";

?>