<?php
session_start();

   if (isset($_POST['submitL'])) {
      // receive all input values from the form
      $email = $_POST['email'];
      $password = $_POST['password'];
       

        $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');

        $query = "select ClientId from client where ClientEmail = '$email' and ClientPassword = '$password'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $active = $row['ClientId'];
        $count = mysqli_num_rows($result);

       
       if($count == 1) {
        $_SESSION['user'] = $row[ClientId]; // store userID
       
         header("location: Logged.php");
    
      }else {
           $message = "Incorrect Credenetials! Kindly Try Again!";
           echo "<script type='text/javascript'>alert('$message');</script>";
            header("location: index.html");
           
 
      }
    }


    




?>