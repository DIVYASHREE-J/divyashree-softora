

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

<script src="https://kit.fontawesome.com/67ab68277d.js" crossorigin="anonymous"></script>
<style>
.hometitle {
padding-left: 20rem;
  padding-top: 28rem;
  padding-right: 25rem;
  height:50rem;
  line-height: 1;

}

.hometitledesc1 {
 padding-top:1rem;
  color: black;
  font-size: 1.5rem;

}
@media screen and (max-width:600px) {
  .hometitledesc1 {
    font-size:1rem;
    padding-top:8rem;

  }
}



.aboutusrow {
  display: flex;
  flex-wrap: wrap;
  font-family: 'Lato', sans-serif;
  padding: 0 0px;
  padding-top:0rem;

}

.col {
  flex: 50%;
  max-width: 50%;
  padding: 0 0px;
}

.col img {
  padding-top:0rem;
  vertical-align: middle;
  width: 100%;
  float:left;
  border: 1rem solid white;
   line-height: 0;
}


.aboutuscont {
  margin-top:0rem;
  font-family: 'Lato', sans-serif;
  line-height:2;
  font-size:1.5rem;
  color:solid grey;
  padding:1.2rem;

}

@media screen and (max-width:800px) {
  .aboutuscont {
    font-size:1rem;
  }
}

.aboutushead{
  font-weight: bold;
  margin-top:1rem;
  font-family: 'Lato', sans-serif;
  font-size: 2rem;
  color:#bc8f8f ;
  line-height: 1.2;
}

/*row4*/
.contactusrow {
  display: flex;
  flex-wrap: wrap;
  padding: 0px 0px;

}

.us{
  color:#aeaeae;
  text-align: left;
  margin-top:20px;
  font-size: 1.2rem;
  line-height: 2;
  padding-left: 4rem;
  padding-right: 6rem;
}

.contact1{
  text-align:left;
  color: #aeaeae;
  float:right;
  margin-top:25px;
  font-size: 1.2rem;
  line-height: 2;
  padding-left: 4rem;
}


.contactushead {
  font-size: 2rem;
  font-weight: light
  color:#aeaeae;
  line-height: 1;
}

.contactusrow {
  margin-top: 1rem;
  background-color:#636363;
}

.feedback {
  width: 90%;
  float: left;
}

.contactushead {
  color:#aeaeae;
}

.feed {
  line-height: 1;
  background-color: white;
  border: 1px solid white;
  color: #aeaeae;
}

.feed:enabled {
  background-color: solid white;
  color: #aeaeae;
}

.submit-1 {
margin-top:1rem;
  line-height:1;
  border:1px solid white;
  color:#aeaeae;
}
</style>

<style>
.modal-login {
	width: 350px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;
	position: relative;
	justify-content: center;
}
.modal-login .close {
	position: absolute;
	top: -10px;
	right: -10px;
}
.modal-title {
	color: #708090;
	text-align: center;
	font-size: 26px;
	margin-top: 0;
}
.modal-login .modal-content {
	color: #708090;
	border-radius: 1px;
	margin-bottom: 15px;
	background: #fff;
	border: 1px solid #f3f3f3;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 25px;
}
.modal-login{
margin-bottom: 20px;
}
 .form-group {
	margin-bottom: 20px;
}
.modal-login label {
	font-weight: normal;
	font-size: 13px;
}
.modal-login .sform {
	min-height: 38px;
	padding-left: 5px;
	box-shadow: none !important;
	border-width: 0 0 1px 0;
	border-radius: 0;
}
.modal-login .form-control:focus {
	border-color: #ccc;
}
.modal-login .input-group-addon {
	max-width: 42px;
	text-align: center;
	background: none;
	border-bottom: 1px solid #ced4da;
	padding-right: 5px;
	border-radius: 0;
}
.modal-login .btn-lg, .modal-login .btn-lg:active {
	font-size: 16px;
	font-weight: bold;
	background: #90ee90; !important
	border-radius: 3px;
	border: none;
	min-width: 140px;
}
.modal-login .btn-lg:hover, .modal-login .btn-lg:focus {
	background: #c0c0c0; !important
}
.modal-login .hint-text {
	text-align: center;
	padding-top: 5px;
	font-size: 13px;
}
.modal-login .modal-footer {
	color: #999;
	border-color: #dee4e7;
	text-align: center;
	margin: 0 -25px -25px;
	font-size: 13px;
	justify-content: center;
}
.modal-login a {
	color: #fff;
	text-decoration: underline;
}
.modal-login a:hover {
	text-decoration: none;
}
.modal-login a {
	color: #19aa8d;
	text-decoration: none;
}
.modal-login a:hover {
	text-decoration: underline;
}
.modal-login .fa {
	font-size: 21px;
	position: relative;
	top: 6px;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
.modalRegisterForm .fa-check {
	color: #fff;
	left: 9px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}

.page-footer {
   margin-left:15rem;
   text-align: center;
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
          <a href="#about" class="nav-link">  About Us</a>
        </li>
       <li class="nav-item">
          <a href="#contact" class="nav-link">  Contact Us</a>
        </li>
          <li class="nav-item">
                <a class="nav-link" href="login.php" data-toggle="modal" data-target="#myModal">Login</a>
              </li>

              <li class="nav-item">
                    <a class="nav-link" href="registerpage.php" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
                  </li>


      </ul>
    </div>
    </div>
  </div>
</nav>
<!--Carousel Wrapper-->
<div class="homerow1">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img src="bg9.jpg" class="img-fluid" alt="First slide" width="500%" />
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <div class="hometitle">
        <span class="hometitledesc1 w3-animate-opacity">A delight in every bite!</span><br /><br />
      </div>
    </div>
</div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="bg18.jpg" class="img-fluid" alt="Second slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="samosa.jpg" class="img-fluid" alt="Third slide" width="500%" />
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img src="d1.jpg" class="img-fluid" alt="Fourth slide" width="500%" />
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


      </div>
    </div>
    <div class="row homer2 " id="features">
      <div class="col-sm-4 homec2">
        <i class="fas fa-leaf fa-5x"></i><br /><br />
        <h3 class="des">Tasty Food</h3>
      </div>
      <div class="col-sm-4 homec2">
        <i class="fas fa-shipping-fast fa-5x"></i><br /><br />
        <h3 class="des">Speed delivery</h3>
      </div>
      <div class="col-sm-4 homec2">
        <i class="fas fa-mug-hot fa-5x"></i><br /><br />
        <h3 class="des">Hot and healthy</h3>
      </div>
    </div>

<div id="about" class="aboutusrow" >
    <div class="col aboutuscont">
      <h1 class="aboutushead"><b>Why you will love us</b></h1>
      <blockquote> We just don't make food, we make people's cravings. We speak the good food language.
        Our speciality is scrumptious cuisine created with passion and love inspired by flavors of India.
        We take delight in improving upon your favourite Indian dishes in new and creative ways.
  </blockquote>
</div>
     <div class="col image">
    <img src="aboutus.jpg" class="img-responsive" alt="aboutpicture" />
    </div>
  </div>
<div class="contactusrow" id="contact">
 <div class="column us">
      <h1 class="contactushead">Contact Us</h1>
      <br /><i class="fas fa-phone-alt"></i>&nbsp&nbsp8765432108<br>
      <i class="fas fa-map-marked-alt"></i>&nbsp#532, 9th cross, 6th main, Jayanagar
      <br />Bengaluru, Karnataka 560069
      <br /><i class="far fa-envelope"></i></i>&nbsp&nbspfoodquest@gmail.com
      <br />
      <i class="fab fa-instagram"></i>&nbsp&nbsp@food_quest
  </div>

        <div class="column contact1">
      <form action="mailto:foodquest@gmail.com" method="post" enctype="text/plain">
        <h1 class="contactushead">We  would love to hear from you</h1>
        <div class="feedback">
          <label for="customername" class="form-label">Name</label>
          <input type="text" class="form-control feed" id="customername">
        </div>
         <div class="feedback">
          <label for="customermail" class="form-label">Email</label>
          <input type="text" class="form-control feed" id="customermail">
        </div>
        <div class="feedback">
          <label for="comment" class="form-label">Message</label>
          <textarea class="form-control feed" id="comment" rows="4"></textarea>
        </div>
        <div class="feedback">
          <button type="submit" class="btn btn-outline-light submit-1 w3-animate-opacity " value="Submit">Submit</button>
        </div>
      </form>
    </div>

    <!-- Footer -->
    <div class="col copyw">
<footer class="page-footer font-small grey">

  <!-- Copyright -->
  <div class="footer-copyright text-center" style="color:#aeaeae;" style="font-size:1.3rem;">© 2021 Copyright:
    FoodQuest
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control form-control-sm validate sform" name="login_email" placeholder="Your email" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control form-control-sm validate sform" name="login_pwd" placeholder="Your password" required="required">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>


    <div class="text-center">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#modalRegisterForm" class="trigger-btn" data-toggle="modal"></a>
    </div>

    <!-- Modal HTML -->
    <div id="modalRegisterForm" class="modal fade">
    <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">New here, register!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="registerpage.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control form-control-sm validate sform" name="register_email" placeholder="Your email" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control form-control-sm validate sform" name="register_pwd" placeholder="Your password" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-lock"></i>

              </span>
              <input type="password" class="form-control form-control-sm validate sform" name="register_repwd" placeholder=" Confirm Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
          </div>
        </form>
      </div>
    </div>
    </div>
    </div>
    </body>
    </html>

<?php
    if (isset($_GET['loginFailed'])) {
            $message = "Invalid Credentials ! Please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (isset($_GET['diffPwd'])) {
          $message = "Passwords do not match, try again!";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (isset($_GET['usedEmail'])) {
          $message = "Email is already used, try again!";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (isset($_GET['regex'])) {
          $message = "Enter email and password in proper format.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }

    ?>
