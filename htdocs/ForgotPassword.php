<?php


   if (isset($_POST['PasswordButton'])) {
   
      // receive all input values from the form
       $email = $_POST['email'];
     	 #Superglobal
        $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');
       	require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal
	
        $query = "select ClientPassword from client where ClientEmail = '$email'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $myPass = $row[0];
        
       

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
        $mail->AddAddress($email); #later
        $mail->Subject = 'Your RoseClothing Password';
        $mail->Body =  "Your Username is : $email"."<br/> Your Password: $myPass";
        #$mail->WordWrap = 50;

        if(!$mail->Send()) {
           $message = "Error Occured ! Email Was Not Sent !";
           echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message2 = "Your Password Has Been Sent To The Given Address !";
           echo "<script type='text/javascript'>alert('$message2');</script>";
            header("location: index.html");
        }	

           
 
      }

    
?>