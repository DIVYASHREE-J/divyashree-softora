<?php
    include "connect.php";

    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION["loggedin_user"])) {
      $sql0 =  "SELECT * FROM users WHERE email=".$_SESSION["loggedin_user"];
      $result = $conn->query($sql0);
      // $row = $result->fetch_assoc();
    }
?>
