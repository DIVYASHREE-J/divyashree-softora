<?php

include "connect.php";
include "validateuser.php";
include "user.php";


  $login_email = $_SESSION["loggedin_user"];
  $sql0 =  "SELECT * FROM users WHERE email='".$login_email."'";
  $result0 = $conn->query($sql0);
  $row0 = $result0->fetch_assoc();

  $us_id = $row0['id'];

  $us_name = mysqli_real_escape_string($conn, $_POST["us_name"]);
  $us_phone = mysqli_real_escape_string($conn, $_POST["us_phone"]);
  $us_address = mysqli_real_escape_string($conn, $_POST["us_address"]);


  $sql1 = "UPDATE users SET name='".$us_name."', phone='".$us_phone."', address='".$us_address."' WHERE id = '".$us_id."'";

  if (($conn->query($sql1) === TRUE))
  {

  }

  $order_id = "FQTGF" . strval(mt_rand(100000, 999999));

  $sum=0;

  date_default_timezone_set("Asia/Kolkata");
  $timest = date("d:m:Y h:i:sa");

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
  <style>


  .orderedfood {
    padding:2rem;
    font-size: 1.1rem;
    line-height: 2;
  }
  .orderinfo
  {
    margin-top:2rem;
    background-color: 	#8fbc8f;
    text-align:center;
  }
  .order{
  background-color: 		#8fbc8f;
  color :black;
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
            <a class="nav-link" href="cart.php">Cart</a>
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

  <div class="orderinfo">
    <span class="placed" style="font-size:2rem;"><center>Your order has been placed!</span> <br /><br />
    <center>Order ID : <?php echo $order_id ?> <br /><br /><br />
    <?php
    $sql3 =  "SELECT * FROM cart";
    $result3 = $conn->query($sql3);
    if ($result3->num_rows > 0)
    {

      // output data of each row

 while($row3 = $result3->fetch_assoc()) {
        $f_id=$row3["food_id"];
        $f_qty=$row3["food_qty"];
        $sum+=$row3["total_amt"];

        // echo $order_id."<br />";
        // echo $u_id."<br />";
        // echo $f_id."<br />";
        // echo $u_name."<br />";
        // echo $u_phone."<br />";
        // echo $u_address."<br />";

        $sql2 = "INSERT INTO orderdetails (order_id, user_id, food_id, food_qty, user_name, user_phone, user_address, timestamp) VALUES ('$order_id', '$us_id', '$f_id', '$f_qty', '$us_name', '$us_phone', '$us_address', '$timest')";
        if (($conn->query($sql2) === TRUE))
        {

        }

        ?>

    <div class="row order">
      <div class="col-4">
        <span class="orderedfood"><?php echo $row3["food_name"]; ?></span><br />
      </div>
      <div class="col-3">
        <span class="orderedfood qty">x<?php echo $row3["food_qty"]; ?></span><br />
      </div>
      <div class="col-1">
        <span class="orderedfood">Rs.<?php echo $row3["food_amt"]; ?></span><br />
      </div>
    </div>





    <?php
    $sql3 = "DELETE FROM cart";
    if (($conn->query($sql3) === TRUE))
    {

    }
    }

    } ?>

  </div>
</body>
</html>
