<?php
class Gato
{
    function maullar()
    {
        print "El gato maulla"."<br>";
    }
    
    function ronronear()
    {
        print "El gato ronronea"."<br>";
    }


    
}

$metodos = get_class_methods("Gato");
foreach($metodos as $metodo)
{
    print $metodo."<br>";

}

if(method_exists("Gato", "maullar"))
{
    print "Los gatos pueden maullar"."<br>";

}
else
{
    print "Los gatos NO pueden maullar"."<br>";
}
?>
