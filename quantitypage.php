<?php
if(isset($_POST["quantity"])){
  $food_qty = $_POST['quantity'];
  $_SESSION["food_qty"]=$food_qty;

  }

  header("location:./menu.php");

?>