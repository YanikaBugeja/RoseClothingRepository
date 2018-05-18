<?php
  session_start();
  error_reporting(0);
            $conn = mysqli_connect ('localhost', 'root','', 'roseclothing', '3306')or die ('Cannot Connect');

    

             $query4 = "select * from client where ClientId = '{$_SESSION['user']}'";
             $result4 = mysqli_query($conn,$query4);
             $row4 = mysqli_fetch_assoc($result4);

        
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
       <nav class="navbar navbar-expand-lg navbar-dark  " >
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
            <a class="nav-link"  href="LogOut.php" id="Menu" name= "Logout" >Log Out</a>
          </li>
         
        </ul>
      </div>
      

      
     
    </nav>
   </header>
   
   <nav class="navbar navbar-expand-lg navbar-dark" id= "navbar" >
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
    
          
    <input id="forgotPass" type="submit" type="submit" name="Checkoutbtn"style="margin-left: 35%;
          margin-bottom: 5%;margin-top: 5%;" value= "Checkout" data-toggle="modal" data-target="#exampleModalCenter" >
    <form action="deleteBtn.php"  method= "post">

      <div class ="row">
    <?php
            $query2 = "select InventoryId from orders where ClientId = '{$_SESSION['user']}'";
            $result2 = mysqli_query($conn,$query2);
        
            while ($row2 = mysqli_fetch_array($result2)){
                $product = $row2['InventoryId'];
                $query3 = "select * from inventory where InventoryId = $product";
                $result3 = mysqli_query($conn,$query3);
                
              while($row3 = mysqli_fetch_assoc($result3)){
                echo "<div id='sections' class= col-lg-6 col-md-6 col-sm-12' style='margin-top:5%;' >";
                echo "<img style='margin-left: 25%; margin-bottom: 2%; width: 200px;' src = $row3[InventoryImage]>";
                echo  "</div>";
                echo "<div id='sections' class= col-lg-6 col-md-6 col-sm-12' style='margin-top:10%; margin-left:-15%' >";
                echo "<h1  style = 'color: white; font-family: Courier New, Courier, monospace; text-align: center;'> $row3[InventoryDesc] </h1>";
                echo "<h2 style = 'color: white; font-family: Courier New, Courier, monospace; text-align: center;'> &#8364 $row3[InventoryPrice]</h2>";
                  //echo "<input type='submit'  name ='Remove' value= 'Remove From Cart'  class='btn' style='margin-left: 25%;' >";
                echo "</div>";
                
          
          
          }
          }
          
    ?>
        </div>
    </form>
                  
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
             
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle" > Rose Clothing </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form  action = "Payment.php" method="post">
                  <div class="modal-body">
                       <h4  id="emailF"> Shipping Address </h4>
                        <br/>
                        <input   type="text" name= "address" id= "addressUA" value="<?php echo $row4['ClientAddress']; ?>" > 
                        <br/>
                        <h4  id="emailF"> Confirmation Email Address </h4>
                        <br/>
                        <input type="email" id= "email" name="email1"> 
                        <h4  id="emailF"> Payment Options </h4>
                        <br/>
                        <input   type="text" name= "Payment" id= "addressUA"  >
                        <br/>
                        <h4  id="emailF"> Card Number </h4>
                        <br/>
                        <input   type="text" name= "Card" id= "addressUA"  >
                         <br/>
                        <h4  id="emailF"> CVV Number </h4>
                        <br/>
                        <input   type="text" name= "cvv" id= "addressUA"  >
                        <br/><br/>
        
                    <br/>
                  </div>
                  <div class="modal-footer">
                  
               <input type="submit"  name ="PaymentBtn" value= "Secure Payment" data-toggle="modal"  class="btn" >
    
                  </div>
                </form>
                </div>
              </div>
            </div>
          
    
    
    </body>
</html>
