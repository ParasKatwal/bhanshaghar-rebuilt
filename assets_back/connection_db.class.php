<?php

class db {
    private $username;
    private $password;
    private $servername;
    private $dbname;
    
    public function connect(){
        $this->username = "root";
        $this->password = "";
        $this->servername = "localhost";
        $this->dbname = "bhansaghar";
        
        $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

?>
