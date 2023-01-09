<?php
    interface iMamifero{
        public function andar();
        public function decir();


    }

    class Gato implements iMamifero
    {
        public function andar(){
            return "camina";

        }


        public function decir(){
            return "miau, miau";
        }
    }
    class Delfin implements iMamifero
    {
        public function andar(){
            return "nada";

        }


        public function decir(){
            return "iu, iu";
        }
    }

    class Murcielago implements iMamifero
    {
        public function andar(){
            return "vuela";

        }


        public function decir(){
            return "iiii, iii";
        }
    }

    $gato = new Gato();
    $delfin = new Delfin();
    $murcielago = new Murcielago();

    print "El gato ".$gato->andar()." y dice ".$gato->decir()."<br>";
    print "El delfin ".$delfin->andar()." y dice ".$murcielago->decir()."<br>";
    print "El murcielago ".$murcielago->andar()." y dice ".$murcielago->decir()."<br>";

?>