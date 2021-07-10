<?php

    include "connect.php";
    include "validateuser.php";
	  include "user.php";

    $food_id = $_REQUEST['id'];

    $sql1 =  "DELETE FROM cart WHERE food_id='".$food_id."'";

    if (($conn->query($sql1) === TRUE))
    {
              $err_no = 0;
              die(header("location:./cart.php"));
    }

?>
