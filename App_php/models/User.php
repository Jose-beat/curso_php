<?php
    require "../db/MySQLdb.php";
class User{
    private $Id;
    private $Email;
    

    public function __construct(){

    }
    public function numUsers(){
        $data = array();
        $db = new MySQLdb();
        $data = $db->query("SELECT count(*) FROM Users");
        $db->close();
        unset($db);
        return $data[0];
        
    }

    public static function searchUser($user){
        $db = new MySQLdb();
        $sql = "SELECT * FROM Users WHERE Email='".$user."'";
        $data = $db->query($sql);
        $db->close();
        return isset($data[0])?true:false;
    }

    public static function getIdUser($user){
        $db = new MySQLdb();
        $sql = "SELECT Id FROM Users WHERE Email='".$user."'";
        $data = $db->query($sql);
        $db->close();
        return $data[0];
    }
}