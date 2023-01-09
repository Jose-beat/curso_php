<?php
    require "use.php";

    use Animales\Mamiferos\{Perro as MiPerro, Gato};
    use function Animales\Mamiferos\{ladrar as ladrido, maullar};
    use const Animales\Mamiferos\{PERRO as DOG, GATO as CAT};


    print "<h2> Clases de espacio de nombres </h2>";
    $perro = new MiPerro;
    $gato = new Gato;

    print "<h2>Funciones del espacio de nombre</h2>";
    ladrido();
    maullar();

    print "<h2>Constantes del espacio de nombres</h2>";
    print DOG."<br>";
    print CAT."br";
 





?>