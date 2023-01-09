<?php

class Stamp{
    private $Id;
    private $Album;
    private $User;
    private $State;
    private $Number;

    public function __construct(){

    }
    public function numStamps(){
        $data = array();
        $db = new MySQLdb();
        $data = $db->query("SELECT count(*) FROM Stamps");
        $db->close();
        unset($db);
        return $data[0];
        
    }

    public function getUserStamps($userId, $albumId){
        $data = array();
        $db = new MySQLdb();
        $sql = "SELECT count(*) FROM Stamps WHERE Album=".$albumId." AND User=".$userId;
        $data = $db->query($sql);
        $db->close();
        unset($db);
        return $data;
 
    }   

    public function getUserAlbum($userId, $albumId){
        $data = array();
        $db = new MySQLdb();
        $sql = "SELECT * FROM Stamps WHERE album=".$albumId." AND User=".$userId;
        $data = $db->querySelect($sql);
        $db->close();
        unset($db);
        return $data;
    }   
}