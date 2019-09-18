<?php
include_once('connection_db.class.php');

class item extends db{
    private $id;

    
    public function __construct($id){
        $this->id=$id;     
    }
    
    public function select(){         
        $sql = "select * from menu where id=$this->id";
        $result = $this->connect()->query($sql);
        $numrows = $result->num_rows;
       
        if ($numrows==1){
            if($row = $result->fetch_assoc()){
                $id=$row['id'];
                $title=$row['title'];
                $price=$row['price'];
                $image=$row['image'];
                $blurb=$row['blurb'];
                $item_array=array();
                $item_array['id']=$id;
                $item_array['title']=$title;
                $item_array['price']=$price;
                $item_array['img']=$image;
                $item_array['blurb']=$blurb;             
            }
           return $item_array;
        }
        else{
            return false;
        }    
    }
}
?>