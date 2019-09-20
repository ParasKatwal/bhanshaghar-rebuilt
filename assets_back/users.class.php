<?php

include_once('connection_db.class.php');

class users extends db{

    public function select(){   
        $sql = "select * from user";
        $result = $this->connect()->query($sql);
        $numrows = $result->num_rows;
        
        if($numrows>0){
            $user =  array();
            while($row = $result->fetch_assoc()){
                $user[$row['id']]['name'] = $row['first_name']." ".$row['last_name'];
                $user[$row['id']]['email'] = $row['email'];
                $user[$row['id']]['address'] = $row['address'];
                $user[$row['id']]['contact'] = $row['phone_number'];
            }
        }
        return $user;
    }
}
?>