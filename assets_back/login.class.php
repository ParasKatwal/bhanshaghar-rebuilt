<?php

include_once('connection_db.class.php');

class login extends db{
    private $email;
    private $password;

    
    public function __construct($email,$password){
        $this->email=$email;
        $this->password=$password;     
    }
    
    public function select(){         
        $sql = "select * from user where email='$this->email'";
        $result = $this->connect()->query($sql);
        $numrows = $result->num_rows;
       
        if ($numrows==1){
            $row = $result->fetch_assoc();
            if(password_verify($this->password, $row['password'])){
                header('location:../welcome.php');
            }else{
                header('location:../index.php?msg=match');
            }
        }
        else{
            header('location:../index.php?msg=notexists');
        }    
       
    }
   
}

$conn = new db();

$email = mysqli_real_escape_string($conn->connect(),$_POST['email']);
$pwd = mysqli_real_escape_string($conn->connect(),$_POST['password']);

$sign_up = new login($email,$pwd);
$sign_up->select();

$conn->connect()->close();
?>