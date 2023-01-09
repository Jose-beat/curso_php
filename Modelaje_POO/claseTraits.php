<?php

    //Son como clases de las cuales podemos heredar de manera multiple

    interface Animal{
        function nacer();
        function crecer();
        function reproducir();
        function morir();

    }

    class Errores{
        public static function error($texto){
            $prefix = date('d-m-y- h:i:s :::');
            file_put_contents('log.txt', $prefix, $texto, "/n", FILE_APPEND);

        }
    }

    abstract class Vertebrado implements Animal{
        private $huesos;

        public function getHuesos(){ return $this->huesos; }
        function nacer(){}
        function crecer(){}
        function reproducir(){}
        function morir(){}
    }


    abstract class Invertebrado implements Animal{
        use Oviparo;
        private $hemocianina;

        public function gethemocianina(){ return $this->hemocianina; }
        function nacer(){}
        function crecer(){}
        function reproducir(){}
        function morir(){}
    }
//Usamos trait para realizar herencia multiple
    trait Oviparo  {
        private $huevos;
        public function getHuevos(){
            return $this->huevos;
            if(!isset($this->huevos)){
                Errores::error(
                    "Error, debes de indicar la variable 'huevos '".
                    "error en el archivo: ".__FILE__.
                    ", en la linea: ".__LINE__.
                    ", en la clase: ".__CLASS__.
                    ", en el metodo: ".__METHOD__.
                    ", en el trazo: ".__TRAIT__.
                    ", en el espacio de nombres: ".__NAMESPACE__
                );

                throw new Exception("No existe la variable 'Huevos'");
            }
            return $this->huevos;
        }

    }


    class Molusco extends Invertebrado{
        private $radula;
        public function getRadula(){ return $this->radula; }
    }

//Realizamos la herencia a la clase reptil
    class Reptil extends Vertebrado{
        use Oviparo;
        private $escamas;
        public function getEscamas(){ return $this->escamas; }
    }

    class Tortuga extends reptil{

    }

    class Pulpo extends Molusco{

    }
    //Obtenemos los metodos con los que cuenta una clase
    $tortuga = new Tortuga();
    print "<pre>";
    var_dump(get_class_methods($tortuga));
    print "<br>";
    var_dump(get_class_methods(new Pulpo));
    print "<br>";
    var_dump(get_class_methods("Animal"));
    if(method_exists($tortuga, "nacer"))
    {
        print "Si existe el metodo nacer en las tortugas";
    }
    else
    {
        print "No existe el metodo nacer en las tortugas";
    }


    //Metodos Reflection nos muestran la composicion o estructura de nuestras clases
    $reflection = new ReflectionClass("ZipArchive");
    Reflection::export($reflection);
    print $reflection->getName()."<br>";
    var_dump($reflection->isAbstract());
    var_dump($reflection->isInstantiable());
    var_dump($reflection->isInternal());



       //Constantes Predefinidas o Magicas
    $tortuga = new Tortuga();
    $tortuga->getHuevos();


    print "</pre>"



    

?>

