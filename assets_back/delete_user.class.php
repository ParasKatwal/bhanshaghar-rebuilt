<?php

include_once('connection_db.class.php');

class delete_user extends db{
    
    private $id;
    
    public function __construct($id){
        $this->id=$id;    
    }
    
    public function select(){   
        $sql = "delete from user where id = $this->id";
        $result = $this->connect()->query($sql);
        
        if($result){
            header('location:../admin.php?msg=deleted');
        }else{
            echo "delete operation of ".$this->id." gone wrong.";
        }
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $del =  new delete_user($id);
    $del->select();  
}

?>