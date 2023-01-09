<?php
    class Carro{
        const PRECIO_MANTEQUILLA = 1.00;
        const PRECIO_LECHE = 3.50;
        const PRECIO_HUEVOS = 5.90;


        protected $productos = array();

        public function add($productos, $cantidad){
            $this->productos[$productos] = $cantidad;


        }

        public function obtener($producto){
            return isset($this->productos[$producto])? $this->productos[$producto] : false;
        }

        public function obtenerTotal($impuesto){
            $total = 0.0;


            //Funcion anonima no toma variables globales si no del ambiente padre
            $llamada = function($cantidad, $producto) use ($impuesto, &$total){
                $precio = constant(__CLASS__. "::PRECIO_".strtoupper($producto));
                $total += ($precio*$cantidad) *($impuesto+1.0);
            };

            array_walk($this->productos, $llamada);

            return $total;
        }


    }

    $miCarrito = new Carro;
    $miCarrito->add("mantequilla", 3);
    $miCarrito->add("leche", 3);
    $miCarrito->add("mantequilla", 3);
    print $miCarrito->obtenerTotal(0.1);


    ///Uso de this en funciones anonimas

    class Perro{
        private $nombre;
        private $tipo;

        public function __construct($nombre, $tipo){
            $this->nombre = $nombre;
            $this->tipo = $tipo;

        }

        public function saludo($cadena){
            return function() use ($cadena){
                return $cadena.", soy un perro ".$this." y me llamo ".$this->nombre."<br>";

            };
        }
    }


    $canelita = new Perro("Canelita", "Salchicha");
    $saludo = $canelita->saludo("Hola, que tal");
    

    


?>