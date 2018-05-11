<?php
session_start(); 
     if (isset($_POST['submitS'])) {
          // receive all input values from the form
          $name = $_POST['firstname'];
          $surname =$_POST['lastname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $address = $_POST['address'];

            $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');

            $query1 = "select * from client where ClientEmail = '$email'";

            $result = mysqli_query($conn, $query1);

            if ($result ->num_rows  >0){

                $message1 = "Account Already Registered !";
                echo "<script type='text/javascript'>alert('$message1');</script>";
                header("location: index.html");

            } else {
                 $query = "insert into client (ClientName,ClientSurname,ClientEmail,ClientPassword,ClientAddress) values ('$name','$surname','$email','$password','$address')";
                  mysqli_query ($conn, $query) or die ('Error Querying Database');
                header("location: index.html");

            }
        }
    ?>