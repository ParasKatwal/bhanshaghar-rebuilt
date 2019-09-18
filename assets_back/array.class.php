<?php
include_once('connection_db.class.php');

class menu extends db{
    private $type;

    
    public function __construct($type){
        $this->type=$type;     
    }
    
    public function select(){         
        $sql = "select * from menu where type='$this->type'";
        $result = $this->connect()->query($sql);
        $numrows = $result->num_rows;
       
        if ($numrows>0){
            $menu_array = array();
            while($row = $result->fetch_assoc()){
                $title=$row['title'];
                $price=$row['price'];
                $image=$row['image'];
                $blurb=$row['blurb'];
                $item_array=array();
                $item_array['title']=$title;
                $item_array['price']=$price;
                $item_array['img']=$image;
                $item_array['blurb']=$blurb;
                $menu_array[$title]=$item_array;                
            }
        }
        else{
            echo "There is no  menu items of type ".$this->type;
        }    
       return $menu_array;
    }
   
}
  
?>