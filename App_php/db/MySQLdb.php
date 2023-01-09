<?php
    class MySQLdb{
        private $host = "localhost";
        private $user = "root";
        private $key = "";
        private $db = "Albums";
        private $conn;
        private $port = "3306";
        public function __construct(){
            $this->conn = mysqli_connect(
                $this->host, 
                $this->user, 
                $this->key, 
                $this->db,
                $this->port

            );
            if(mysqli_connect_error()){
                printf("Error en la conexion de la base de datos %d", mysqli_connect_error());

            }else{
                // print "Conexion exitosa";
            }
        }

        public function query($q){
            $data = array();
            if($q!=""){
                if($r = mysqli_query($this->conn, $q)){
                    $data = mysqli_fetch_row($r);            
                }
            }

            return $data;
        }

        public function querySelect($q){
            $data = array();
            if($q!=""){
                if($r = mysqli_query($this->conn, $q)){

                    while ($row = mysqli_fetch_assoc($r)) {
                        array_push($data, $row);

                    }
                }
            }

            return $data;
        }

        public function queryNoSelect($q){
            //SELECT, UPDATE, DELETE
            $r = array();
            if($q!=""){
                $r = mysqli_query($this->conn, $q);
            }
            return $r;
        }
        public function close(){
            mysqli_close($this->conn);
            // print "Se cerro exitosamente la base de datos";
        }

    }

    

?>