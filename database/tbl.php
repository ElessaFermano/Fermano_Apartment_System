<?php

include 'db.php';

class Users extends Db{

    public $tblName = "users";

    public function createTbl(){
        
        $this->dbConn();

        $created  = $this->conn->query("CREATE TABLE IF NOT EXISTS $this->tblName(
            id int auto_increment primary key,
            first_name varchar(200) not null,
            last_name varchar(200) not null,
            email varchar(200) unique,
            password varchar(200) not null
            )engine=InnoDb

            "); 

            if($created){
                return json_encode(
                    [
                        'message' => "Table is Created!"
                    ]
                    );
         
            }
    }    
    public function register($data){
        $fname = $data['first_name'];
        $lname = $data['last_name'];
        $email = $data['email'];
        $password = $data['password'];

        $inserted = $this->conn->query("INSERT INTO $this->tblName(first_name, last_name, email, password)
        values('$fname', '$lname', '$email', '$password')");

        if($inserted){
            header('Location:http://localhost/apartmentms/public/dashboard.html' );
        }
    }

    public function login($data){
        $email = $data['email'];
        $password = $data['password'];

        $int = $this->conn->query("SELECT * FROM $this->tblName WHERE email = '$email' AND password = '$password'");

        if($int->num_rows > 0){
            header('Location:http://localhost/apartmentms/public/dashboard.html ');
        }else{
            return json_encode([
                'message' => 'Email is invalid'
            ]);
        }
    }
}





?>