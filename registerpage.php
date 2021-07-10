<?php
    include "connect.php";
    include "user.php";
    include "validateuser.php";


    /*  Set appropriate error number if errors are encountered.
        Key (for err_no) :
        -1 = Connection Error.
         0 = Successful Change.
         1 = Regex.
         2 = Passwords do not match.
         3 = Old and new passwords are same. */
    $err_no = -1;

    $register_email = mysqli_real_escape_string($conn, $_POST["register_email"]);
    $register_pwd = mysqli_real_escape_string($conn, $_POST["register_pwd"]);
    $register_repwd = mysqli_real_escape_string($conn, $_POST["register_repwd"]);

    $regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

    if (!preg_match($regex_email, $register_email) || !preg_match($regex_password, $register_pwd)) {
      $err_no = 1;
      die(header("location:./home.php?regex=true"));
    }
    else {
      if($register_pwd == $register_repwd)
      {
        $sql = "INSERT INTO users (email, password) VALUES ('$register_email', '$register_pwd')";
        if (($conn->query($sql)))
        {
          $err_no=0;
          $_SESSION["loggedin_user"] = $register_email;
          $_SESSION['isUserValid'] = true;
          $_SESSION['LAST_ACTIVITY'] = time();
          header("location:./menu.php");
        }
      }
else {
  $err_no=2;
die(header("location:./home.php?diffPwd=true"));
}
}
if($err_no==-1)
{
  die(header("location:./home.php?usedEmail=true"));
}

?>
