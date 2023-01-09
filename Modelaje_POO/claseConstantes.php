<?php
    class Gato{
        const EDAD = 18;
        //5.3.0
        const PESO = <<< 'EOT'
        20
EOT;
        //5.6.0
        const UNO = 1;
        const DOS = self::UNO + self::UNO;
        const TRES = self::UNO + self::DOS;
        const SUMA = "Las vidas de los gatos son ".self::TRES * 3;


        function edadGatuna(){
            return self::EDAD;
        }
    }

    $benito = new Gato();
    print "La edad maxima de los gatos es ".Gato::EDAD."<br>";
    print "La edad maxima de los gatos es ".$benito->edadGatuna()."<br>";

    //5.3.0
    $clase = 'Gato';
    print "La edad maxima de los gatos es ".$clase::EDAD."<br>";
    print "el peso maxima de los gatos es ".$clase::PESO."<br>";
    print $clase::SUMA;
    //

?>