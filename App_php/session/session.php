<?php
    class Session{
            private $login = false;
            private $user;
            function __construct(){
                session_start();
                $this->checkLogin();

                if($this->login){

                }else{

                }
            }

            private function checkLogin(){
                if(isset($_SESSION["User"])){
                    $this->user = $_SESSION["User"];
                    $this->login = true;
                }else{
                    unset($this->user);
                    $this->login = false;

                }
            }

            public function beginLogin($user){
                if($user){
                    $this->user = $_SESSION["User"] = $user;
                    $this->login = true;

                }

            }

            public function endLogin($user){
                unset($_SESSION["User"]);
                unset($this->user);
                $this->login = false;
            }

            public function stateLogin(){
                return $this->login;
            }

            public function getUser(){
                return $this->user;
            }
    }
?>