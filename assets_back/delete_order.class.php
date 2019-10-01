<?php

include_once('connection_db.class.php');

class delete_order extends db{
    
    private $id;
    
    public function __construct($id){
        $this->id=$id;    
    }
    
    public function select(){   
        $sql = "delete from food_order where order_id = $this->id";
        $result = $this->connect()->query($sql);
        
        if($result){
            header('location:../orders.php?msg=deleted');
        }else{
            echo "delete operation of ".$this->id." gone wrong.";
        }
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $del =  new delete_order($id);
    $del->select();  
}

?>