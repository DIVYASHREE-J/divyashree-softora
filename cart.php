<?php

    include "validateuser.php";
	  include "user.php";

	  $login_email = $_SESSION["loggedin_user"];
    $sql0 =  "SELECT * FROM users WHERE email='".$login_email."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $sql1 =  "SELECT * FROM menu";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if (isset($_GET['added'])) {
      $message = "Your cravings has been added to cart!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    $sum=0;

    $pos=strpos($login_email,"@");
    $username=substr($login_email, 0, $pos);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Food quest</title>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <!-- W3Schools -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- CSS -->
  <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet" />

  <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>


  <!-- Icons -->
  <script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>
<style>
@media (max-width:992px) {

  .welcome {
    order:0;
  }
  .navbar-toggler {
    order:1;
    margin-left:15px;
    margin-right:0;
  }

  .navbar > .collapse {
    margin-top:2rem;
  }

}
  .cart {
    font-family: 'Lato', sans-serif;
    margin: auto;
    padding:5rem;
    color: black;
    margin: 2rem 4rem;
    margin-top: 0;
  }

  .carttitle {
    padding: 1.5rem;
    border-top: 3px solid #deb887;
    margin-bottom: 1.5rem;
    border-bottom: 3px solid #deb887;
    line-height: 2;
  }

  .cartrow {
    padding: 2.5rem 4rem;
    border-bottom: 1px solid #aeaeae;
    background-color: 		#eee8aa;
    color: black;
    font-weight: bold;
  }

  .cartdetails {
    padding: 2rem;
    margin-top: 4rem;
  }

  .name, .phone, .address {
    padding:1rem 3rem;
    text-align: center;
  }

  .namecus, .phonecus, .addresscus {
    padding:1.5rem;
  }

  .namecus:focus, .phonecus:focus, .addresscus:focus {
    box-shadow: 0 0 0 0rem #aeaeae;
  }

  .cartname {
    font-size: 1.3rem;
  }


  .cartfooter {
    margin:2rem 3rem;
    padding: 1rem;
  }

  .checkout {
    text-align:center;
    padding: 2.4rem 2.4rem;
    background-color: #32cd32;
    color: #fff;
    border: 1px solid #32cd32;
    border-radius: 0;
    font-size: 1.3rem;
    font-weight: bold;

    height:20px;
  }

  .checkout:focus {
    background-color: 	#32cd32;
    color: #fff;
    border: 1px solid 	#32cd32;
    box-shadow: 0 0 0 0rem #fff;
  }

  .checkout:active:focus {
    box-shadow: 0 0 0 0.25rem #aeaeae;
    text-align: center;
  }

  .checkout:hover {
    color:#fff;
    background-color: #32cd32;
    border: 1px solid #32cd32;
    box-shadow: 0 0 0 0rem #fff;
  }

  .carttrash {
    color: red;
  }

  .carttrash:hover {
    color: blue;
  }

  .total {
    font-size:1.2rem;
    float:left;
    padding-right:25rem;
    margin-bottom:auto;

  }
    .orderdetails {
      margin-top: 2rem;
      padding: 3rem 1rem;
      font-size: 1.6rem;
      font-family: 'Lato', sans-serif;
      line-height: 1.5;
      text-align: center;

    }

    .goback {
      text-align:center;
      padding-top:2rem;
      color: black;
    }

    .goback:hover {
      color: blue;
    }
.cartcheckout {
  float:right;
   text-align: center;
  padding-right:63rem;
}
@media screen and (max-width:696px) {
   .total{
     font-size: 0.5rem;
   }
}

</style>


</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="logoutpage.php"><span class="food">FOOD</span><span class="quest">QUEST</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cart.php">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logoutpage.php">Logout</a>
          </li>
        </ul>
      </div>
      <span class="navbar-text welcome">
      welcome, <?php echo $username; ?>!
      </span>
    </div>
  </nav>


  <div class="cart">
    <div class="row carttitle">
      <h3 style="line-height:2; font-size:2.5rem;">Hi,here's your cart, we are delivering your happiness.</h3><br />
    </div>

    <?php
    $sql3 =  "SELECT * FROM cart";
    $result3 = $conn->query($sql3);
    if ($result3->num_rows > 0)
    {
      $sum=0;
      // output data of each row

      while($row3 = $result3->fetch_assoc()) {

        $sum+=$row3["total_amt"];

        ?>

    <div class="row cartrow">
      <div class="col-sm">
        <span class="cartname"><?php echo $row3["food_name"]; ?></span><br />
      </div>
      <div class="col-sm" style="text-align:center;">
        <span class="cartqty">&nbspx <?php echo $row3["food_qty"]; ?></span>
      </div>
      <div class="col-sm cartdel" style="text-align:center;">
        <a href="carttrashpage.php?id=<?php echo $row3["food_id"]; ?>" class="carttrash"><i class="fas fa-trash-alt carttrash"></i></a>
      </div>

      <div class="col-sm" style="text-align:right;">
        <span class="cartamt">Rs. <?php echo $row3["total_amt"]; ?></span>
      </div>
    </div>




    <?php	} ?>

    <form action="orderaction.php" method="post">
    <div class="row cartdetails" id="userdetails">
      <!-- <h2 class="instr">Please enter your name and address in the form given below.</h2> -->

        <div class="name">
          <h5 style="text-align:left";> Name: </h5>
          <input type="text" class="form-control namecus" name="us_name" value="<?php echo $row0["name"] ?>"  >
        </div>
        <div class="phone">
            <h5 style="text-align:left";> Phone Number: </h5>
          <input type="text" class="form-control phonecus" name="us_phone" value="<?php echo $row0["phone"] ?>"  minlength="10" maxlength="10"  >
        </div>
        <div class="address">
            <h5 style="text-align:left";> Address: </h5>

          <textarea class="form-control addresscus" name="us_address" rows="4" value="<?php echo $row0["address"] ?>" ></textarea>
        </div>
    </div>

    <div class="row cartfooter">
      <div class="col-6 cartcheckout" >
        <button type="submit" class="btn btn-primary checkout float-right" >CHECKOUT</button>
          </div>
      <div class="col-6 total">

        <h4 style= "color:#aeaeae" ><b>Total amount</b></h4>
        <h3 style= "color:#636363"><b>Rs. <?php echo $sum; ?></b></h3>
      </div>
    </div>

  </form>

  <?php }

  else { ?>

      <div class="row cartrow">
        <h1 style="text-align:center;">Your cart is empty!</h1>
        <a href="menu.php" class="goback">Go back to menu</a>
      </div>

  <?php } ?>


  </div>


</body>

</html>
