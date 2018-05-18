<?php
  session_start();
  error_reporting(0);
   

          if (isset($_POST['Remove'])) {
               $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');
    
                $query2 = "select InventoryId from orders where ClientId = '{$_SESSION['user']}'";
                $result2 = mysqli_query($conn,$query2);
               while ($row2 = mysqli_fetch_array($result2)){
                $product = $row2['InventoryId'];
                $query3 = "select * from inventory where InventoryId = $product";
                
              while($row3 = mysqli_fetch_assoc($result3)){
               $query2 = "DELETE FROM orders WHERE   InventoryId = $row3[InventoryId] ";
               $result2 = mysqli_query($conn,$query2);
              
         

               header("location: ShoppingCart.php");
        
        
              }}
        }

?>