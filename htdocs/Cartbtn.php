<?php
  session_start();
  error_reporting(0);


          if (isset($_POST['AddBtn'])) {
               $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');
              
               $query = "insert into orders (OrderStatus,ClientId,InventoryId) values ('Processing', '{$_SESSION['user']}','{$_SESSION['inventory']}' )" or die ('Cannot Connect');
               $result = mysqli_query($conn,$query);
              
                $query2 = "UPDATE orders SET OrderId = OrderId +1 WHERE ClientId = '{$_SESSION['user']}'";
                $result2 = mysqli_query($conn,$query2);
           


               header("location: ShoppingCart.php");
        
        
           
        }

?>