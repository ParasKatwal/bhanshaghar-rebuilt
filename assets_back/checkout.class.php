<?php

session_start();

if(!isset($_SESSION['admin']))
header('location:../cart.php');

include_once('connection_db.class.php');

class checkout extends db{
    private $user_id;
    private $orders;
    private $total_price;
    private $order_time;
    
    public function __construct($user_id,$orders,$total_price,$order_time){
        $this->user_id=$user_id;
        $this->orders=$orders;
        $this->total_price=$total_price;
        $this->order_time=$order_time; 
    }

   
    public function insert(){     
          $sql = "INSERT INTO food_order(user_id,orders,total_price,order_time) VALUES ($this->user_id, '$this->orders', '$this->total_price',$this->order_time)";
            
          if ($this->connect()->query($sql) === TRUE) {
              header('location:../index.php?msg=success');
          } else {
              header('location:../index.php?msg=error');
          } 
     }
}

$conn = new db();
$con = $conn->connect();
$user_id=$_SESSION['admin_id'];
$orders = "";
foreach($_SESSION["item"] as $item => $property){
    $orders.= $property['item_quantity']."*".$property['item_name']."-> Rs.".$property['item_price'].", ";
}
$total=$_SESSION['total'];
$order_time= new DateTime('NOW');
$order_time= $order_time->format('c');

$checkout = new checkout($user_id,$orders,$total,$order_time);
$checkout->insert();

$conn->connect()->close();
?>