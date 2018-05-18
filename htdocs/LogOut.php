<?php
    if (isset($_POST['Logout'])) {
   
     
       
    // Initialize the session
    session_start();


    // Destroy the session.
    session_destroy();
    }
    // Redirect to login page
    header("location: index.html");

    exit;

?>