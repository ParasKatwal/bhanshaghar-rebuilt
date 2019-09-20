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
                    session_start();
                    if(!isset( $_SESSION['admin'] ) ) {
                      $_SESSION['admin'] = $row['first_name']." ".$row['last_name'];
                    }
                    if(!isset( $_SESSION['admin_id'] ) ) {
                      $_SESSION['admin_id'] = $row['id'];
                    }
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
$hash_pwd='$2y$10$21ZFOzU8J0YP6L2qx/jMwO0kguSTSYe5Uf1JZSOQm7iUtyBhz1JAW';

if($email=='admin@bhanshaghar.com'){
     if(password_verify($pwd,$hash_pwd)){
        session_start();
        if(!isset( $_SESSION['bhanshaghar_admin'] ) ) {
            $_SESSION['bhanshaghar_admin']='bhanshaghar';  
        }
        header('location:../admin.php');
    }
}
else{
$sign_up = new login($email,$pwd);
$sign_up->select();
}

$conn->connect()->close();
?>