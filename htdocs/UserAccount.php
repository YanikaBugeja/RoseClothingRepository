<?php
      error_reporting(0);
session_start();
    $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');
    $userId = $_SESSION['user'];
       
    $query = "select * from client where ClientId = $userId ";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result)
        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> Rose Clothing </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="RoseClothingStyleSheet.css">
    
</head>
<body class = "container-fluid">

   <header>
       <nav class="navbar navbar-expand-lg navbar-dark " >
      <div class="navbar-header" >
        <a class="navbar-brand" href="index.html">
            <img id= "LogoPng" src="LogoPng.png" class="d-inline-block align-top" alt="LogoPng" > 
            <h1 id = "Title" >Rose</h1>
      </a>
      </div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="UserAccount.php" id="Menu">User Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Help.html" id="Menu">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ShoppingCart.php" id="Menu">Shopping Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="LogOut.php" id="Menu" >Log Out</a>
          </li>
         
        </ul>
      </div>
      

      
     
    </nav>
   </header>
   
   <nav class="navbar navbar-expand-lg navbar-dark" >
     <div class="navbar-header">
     
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              Women
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" i>
              <a class="dropdown-item" href="FJeans.php">Jeans</a>
              <a class="dropdown-item" href="Ftops.php">Tops</a>
              <a class="dropdown-item" href= "Dresses.php">Dresses</a>
              <a class="dropdown-item" href="FShirts.php">Shirts</a>
              <a class="dropdown-item" href="FHoodies.php">Hoodies</a>
              <a class="dropdown-item" href="FJackets.php">Jackets</a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="FBags.php">Bags</a>
              <a class="dropdown-item" href="FAccessories.php">Accessories</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logged.php">View All</a>
            </div>
          </li>
       
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Men
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" i>
              <a class="dropdown-item" href="MJeans.php">Jeans</a>
              <a class="dropdown-item" href="MTops.php">Tops</a>
              <a class="dropdown-item" href="MShirts.php">Shirts</a>
              <a class="dropdown-item" href="MHoodies.php">Hoodies</a>
              <a class="dropdown-item" href="MJackets.php">Jackets</a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="MBags.php">Bags</a>
              <a class="dropdown-item" href="MAccessories.php">Accessories</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logged.php">View All</a>
            </div>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Searching For ... " id="SearchBarBox">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="SearchBtn">Search</button>
        </form>
      </div>
    </nav>
    
    <div id = "UserAccount" >
        <h1 id="UserAccountHeader"><b> Account Details </b> </h1>
      
        <form id= "SignUpForm"  method= "post">
        
            <label for="firstname" id="firstnameLabel"> First Name </label>
            <br/>
            <input type="text" id= "firstnameUA" name= "firstname" value="<?php echo $row['ClientName']; ?>" >
            <br/>
            <label for="lastname"id="lastnameLabel"> Last Name </label>
            <br/>
            <input type="text" id= "lastnameUA" name= "lastname" value="<?php echo $row['ClientSurname']; ?>" >
            <br/>
            <label for="email1" id="emailLabel"> Email Address </label>
            <br/>
            <input type="email" id= "emailUA" name= "email" value="<?php echo $row['ClientEmail']; ?>" >
            <br/>
            <label for="password1"id="passwordLabel"> Password </label>
            <br/>
            <input type="password" id= "passwordUA" name= "password" value="<?php echo $row['ClientPassword']; ?>" >
            <br/>
            <label for="address" id="addressLabel">Shipping Address </label>
            <br/>
            <input   type="text" name= "address" id= "addressUA" value="<?php echo $row['ClientAddress']; ?>" > 
            <br/><br/>
            
            <input id="submitUA" type="submit" value= "Update" name= "Update">
       
        
        <?php
        session_start();
           

           if (isset($_POST['Update'])) {
              // receive all input values from the form
               $firstname=  $_POST['firstname'];
               $lastname = $_POST['lastname'];
               $email = $_POST['email'];
               $password = $_POST['password'];
               $address = $_POST['address'];
               $userId = $_SESSION['user'];


                $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');

                $query = "update client set ClientName = '$firstname' , ClientSurname = '$lastname' , ClientEmail = '$email' , ClientPassword = '$password', ClientAddress = '$address' where ClientId = '$userId' ";
    
               mysqli_query($conn,$query);
                 
                $message = "Your User Account Information Have Been Updated !";
                echo "<script type='text/javascript'>alert('$message');</script>";
    

              }
            
            ?>
            </form>


            </div>


</body>
</html>