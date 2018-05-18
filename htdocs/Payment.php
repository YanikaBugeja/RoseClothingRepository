<?php


   if (isset($_POST['PaymentBtn'])) {
   
      // receive all input values from the form
       $email1 = $_POST['email1'];
     	 #Superglobal
        $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');
       	require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal
        
     

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->isHtml(true);
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.office365.com";
        $mail->SMTPDebug = 2; #include client and server messages
        $mail->Port = 587;
        #$mail->Port = 465; #change to ssl SMTPSecure
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "yanika.bugeja.b31253@mcast.edu.mt";
        $mail->Password = "mcast150398";

        $mail->From = "yanika.bugeja.b31253@mcast.edu.mt";
        $mail->AddAddress($email1); #later
        $mail->Subject = 'Your RoseClothing Order';
        $mail->Body =  "Your Order Has Been Submitted !"."<br/> Kindly Visit Our Website For Delivery Details, and Thank You For Shopping !"."<br/>";
        #$mail->WordWrap = 50;

        if(!$mail->Send()) {
           $message = "Error Occured ! Email Was Not Sent !";
           echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message2 = "Order Confirmation Has Been Sent Via Email !";
           echo "<script type='text/javascript'>alert('$message2');</script>";
            header("location: index.html");
              
        }	

        
            }

    
?>