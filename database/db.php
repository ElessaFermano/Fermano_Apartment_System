<?php

class Db{
    
  protected $conn;
  public $dbName = 'apartmentms';

  public function dbConn() {
    $this->conn = new mysqli('localhost', 'root', '', $this->dbName);
        if($this->conn){
            return json_encode(
                [
                    'message' => 'Database is Connected!'
                ]
                );
        }

  }

} 

$object = new Db();
$object->dbConn();


?>