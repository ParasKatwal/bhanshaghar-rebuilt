<?php

include_once('connection_db.class.php');

class orders extends db{

    public function select(){   
        $sql = "select * from food_order";
        $result = $this->connect()->query($sql);
        $numrows = $result->num_rows;
        $orders =  array();
        
        if($numrows>0){
            while($row = $result->fetch_assoc()){
                $sql = "select * from user where id=".$row['user_id'];
                $r = $this->connect()->query($sql);
                $r_row = $r->fetch_assoc();
                
                $orders[$row['order_id']]['username'] = $r_row['first_name']." ".$r_row['last_name'];
                $orders[$row['order_id']]['email'] = $r_row['email'];
                $orders[$row['order_id']]['orders'] = $row['orders'];
                $orders[$row['order_id']]['total_price'] = $row['total_price'];
                $orders[$row['order_id']]['order_time'] = $row['order_time'];
            }
        }
        return $orders;
    }
}
?>