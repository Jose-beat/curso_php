<?php

class Album{
    private $Id;
    private $Nombre;
    private $NumStamps;

    public function __construct(){

    }
    public function numAlbums(){
        $data = array();
        $db = new MySQLdb();
        $data = $db->query("SELECT count(*) FROM Albums");
        $db->close();
        unset($db);
        return $data[0];
        
    }

    public function readAlbum(){
        $db = new MySQLdb();
        $data = $db->query("SELECT * FROM Albums");
        $db->close();
        unset($db);
        return $data;

    }

    public function createAlbum($userId, $albumId, $numStamps){
        $db = new MySQLdb();
        for($i=1; $i <= $numStamps ; $i++){
            $sql = "INSERT INTO Stamps VALUES(0,";
            $sql .=$albumId.", ";
            $sql .=$userId.", ";
            $sql .= "0, ";
            $sql .= $i.")";

            $r = $db->queryNoSelect($sql);
        }
    }
}