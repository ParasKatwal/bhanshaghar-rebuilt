<?php

include_once('connection_db.class.php');

class signup extends db{
    private $fname;
    private $lname;
    private $email;
    private $password;
    private $phone_number;
    private $address;
    private $conn;
    
    public function __construct($fname,$lname,$email,$password,$phone_number,$address){
        $this->fname=$fname;
        $this->lname=$lname;
        $this->email=$email;
        $this->password=$password;
        $this->phone_number=$phone_number;
        $this->address=$address;       
    }
    
    
    private function validate(){
        if(!preg_match("/^([a-zA-Z' ]+)$/",$this->fname) || !preg_match("/^([a-zA-Z' ]+)$/",$this->lname)){
           header('location:../index.php?msg=novalidName');   
           return false;
        }
         return true;    
    }
   
    public function insert(){   
        if($this->validate()){
            $sql = "select * from user where email='$this->email'";
            $result = $this->connect()->query($sql);
            $numrows = $result->num_rows;
           
            if ($numrows==0){
                $password = password_hash($this->password, PASSWORD_DEFAULT);
                 $sql = "INSERT INTO user(first_name,last_name,email,password,phone_number,address) VALUES ('$this->fname', '$this->lname', '$this->email','$password','$this->phone_number','$this->address')";
                
                if ($this->connect()->query($sql) === TRUE) {
                    header('location:../index.php?msg=success');
                } else {
                    header('location:../index.php?msg=error');
                }
            }
            else{
                header('location:../index.php?msg=exists');
            }     
        }
    }
}

$conn = new db();
$con = $conn->connect();
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$lname = mysqli_real_escape_string($con,$_POST['lname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$pwd = mysqli_real_escape_string($con,$_POST['pwd']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$address = mysqli_real_escape_string($con,$_POST['address']);

$sign_up = new signup($fname,$lname,$email,$pwd,$phone,$address);
$sign_up->insert();

$conn->connect()->close();
?>