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

    $sum=0;

    $pos=strpos($login_email,"@");
    $username=substr($login_email, 0, $pos);


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Food Quest</title>


  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"</script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
  .welcome {
    font-family: 'Lato', sans-serif;
    color: #ffda69;
    font-size: 1rem;
    padding:1rem;
    margin-left: auto;
  }
  .menur2 {
    margin-left: 2rem;
    padding-right: 2.3rem;
  }


  .flip-card {
    margin-top:4rem;
    margin-left:2rem;
    background-color: transparent;
    width: 20rem;
    height: 20rem;
    perspective: 1000px;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 1.5s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
  }

  .flip-card-front {
    background-color: #bbb;
    color: white;
  }

  .flip-card-back {
      font-family: 'Lato', sans-serif;
    background-color:	#b0e0e6;
    font-weight: bold;
    color:black;
  font-size:1rem;
    transform: rotateY(180deg);
  }
  </style>
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
  .menur1 {
    min-height: 30rem;
    margin: 0;
    background-image: url("menu.jpg");
    background-size: auto 30rem;
    background-position: right;
  }

  .menutitle {
  text-align: center;
    margin-left:15rem;
    line-height: 1;
  }

  .menutitlehead {
     padding-top:3rem;
    text-align: center;
    margin-left: 2rem;;
    font-size: 2rem;
    font-weight: bold;
  }

  .menutitledesc {
    padding-left:1rem;
    line-height:2.3;
    padding-right: 7rem;
    text-align: center;
    font-size: 1.2rem;
  }
@media screen and (max-width:785px) {
  .menutitlehead {
    padding-top:2rem;
    margin-left:1rem;
    font-size: 1.6rem;

  }
  .menutitledesc {
    padding-right:10rem;
    font-size:0.9rem;

  }
}

  </style>

  <style>

  .menur3 {
    margin: 4rem 2rem;
  }

  .menucatr1, .menucatr2, .menucatr3, .menucatr4 {
    padding: 0rem 0rem;
    margin: auto;
      border-bottom: 2.5px solid #deb887;
  }

  .menutitlehb, .menutitlesi, .menutitleni, .menutitlede {
    font-family: 'Lato', sans-serif;
      padding-top:2.5rem;
    font-size: 2.5rem;
    font-weight: bolder;
    margin: 0rem auto;
    margin-top: 0rem;
    color: black;
    padding-bottom: 0.5rem;
    border-bottom: 2.5px solid #deb887;
  }

  .menucontent {
    font-family: 'Lato', sans-serif;
    font-weight: bold;

  }

  .menunamerowdetails {
    padding: 1rem;
    border-bottom: 1.5px solid #e0e0e0;
  }

  .menuname {
      font-family: 'Lato', sans-serif;
    padding-top:0.5rem;
    font-size: 1.3rem;
    padding-right: 1.3rem;

  }

  .menuamt {
    color: black;
  }

  .menuaddbtnhb, .menuaddbtnsi, .menuaddbtnni, .menuaddbtnde {
    padding: 0.3rem 1.5rem;
    background-color: #ff7f50;
    color: #fff;
    border: 1px #ff7f50;
    border-radius: 0;
    font-size: 0.8rem;
    font-weight: bold;
    text-align: center;
  }

  .menuaddbtnhb:focus, .menuaddbtnsi:focus,  .menuaddbtnni:focus, .menuaddbtnde:focus {
    background-color: #ff7f50;
    color: white;
    border: 1px #ff7f50;
    box-shadow: 0 0 0 0rem #fff;
  }

  .menuaddbtnhb:active:focus, .menuaddbtnsi:active:focus, .menuaddbtnni:active:focus, .menuaddbtnde:active:focus {
    background-color: #ff7f50;
    box-shadow: 0 0 0 0.25rem #aeaeae;
    text-align: center;
    color:white;
  }

  .menuaddbtnhb:hover, .menuaddbtnsi:hover, .menuaddbtnni:hover, .menuaddbtnde:hover {
    background-color: #ff7f50;
    border: 1px #ff7f50;
    box-shadow: 0 0 0 0rem #fff;
    color:white;
  }

  .modalqtybody {
    padding: 2rem;
    text-align: center;
    line-height: 3;
  }

  .menuqtyno {
    width: 60%;
    padding-left: 1rem;
    margin: auto;
  }
</style>
<style>
.cartbtn
{
  border:1px #f08080;
  box-shadow: 0 0 0 0.25rem #fff;
  background-color:#ff7f50;
  margin-top:0rem;
}

.cartmod{
  padding-top:59.6rem;
  margin-top:59.6rem;


}
.menuproceed {
  margin-top:0.5rem;
  border:1px #aeaeae;
  color:white;
  box-shadow: 0 0 0 0rem #fff;
  background-color: #ff7f50;
}
.modal-header{
  background-color: 	#f5f5dc;
    border-bottom:2px solid #aeaeae;
  font-size:1.5rem;
  font-weight: bold;
}

.modal-body{

  background-color: #f5f5dc;
  font-size:1.3rem;
  font-weight: normal;
}
.modal-footer{

  border-top: 2px solid #aeaeae;
  background-color: 	#f5f5dc;
}

</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="logoutpage.php"><span class="food">FOOD</span><span class="quest">QUEST</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="menu.php">Menu</a>
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
 <div class="menur1">
    <div class="menutitle">
      <h1 class="menutitlehead">Discover the incredible tastes of India.</h1>
      <span class="menutitledesc">Delightness jumping into the mouth!</span>
    </div>
  </div>

<div class="menur2">

      <div class="row">
        <div class="col">
          <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="card1.jpg" alt="Avatar" style="width:20rem;height:20rem;">
    </div>
    <div class="flip-card-back">
      <h5 class="card-title"><b>HOT BEVERAGES</b></h5>
      <p class="card-text1">If you're trying to fuel your body and soul with things wholesome and healthy, these hot drinks taste indulgent
        and can be a great way to relax.</p>
    </div>
  </div>
</div>
</div>
        <div class="col">
          <div class="flip-card">
         <div class="flip-card-inner">
        <div class="flip-card-front">
         <img src="bg16.jpg" alt="Avatar" style="width:20rem;height:20rem;">
    </div>
    <div class="flip-card-back">
              <h5 class="card-title"><b>SOUTH INDIAN FOOD</b></h5>
              <p class="card-text1">From south to mouth,it makes high use of lentils, spices, coconut and native fruits and vegetables.
                The staple food here is rice.</p>
            </div>
          </div>
        </div>
      </div>
  <div class="col">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="ni.jpg" alt="Avatar" style="width:20rem;height:20rem;">
    </div>
    <div class="flip-card-back">
              <h5 class="card-title"><b>NORTH INDIAN FOOD</b></h5>
              <p class="card-text1">It makes high use of dairy products and includes roti, kulcha, naan with some mouth-watering curries.
              The staple food here is wheat.</p>
          </div>
        </div>
      </div>
    </div>
        <div class="col">
          <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img23.jpg" alt="Avatar" style="width:20rem;height:20rem;">
    </div>
    <div class="flip-card-back">
              <h5 class="card-title"><b>DESSERTS</b></h5>
              <p class="card-text1">Desserts is the most vital part of any meal.They are  the fairy tales of the kitchen, a happily-ever-after to supper.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-lg-7 menucol">
        <div class="menur3">
          <div class="row menucatr1" id="hb">
            <span class="menutitlehb" >Hot Beverages</span><br/>

            <?php
            $sql2 =  "SELECT * FROM menudetails WHERE cat_id=1";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                	<?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>

              <span class="menucontent">
                <form action="cartpage.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row menunamerowdetails">
                    <div class="col-7" id="menufetch">
                      <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                      <span class="menuamt"> Rs.<?php echo $arr_all[$i+$j-2]['amt']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn  menuaddbtnhb">ADD</button>
                      </div>
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

          <div class="row menucatr2" id="si">
            <span class="menutitlesi" >South Indian</span><br />

            <?php
            $sql2 =  "SELECT * FROM menudetails WHERE cat_id=2";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                  <?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>

              <span class="menucontent">
                <form action="cartpage.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row menunamerowdetails">
                    <div class="col-7" id="menufetch">
                      <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                      <span class="menuamt">Rs.<?php echo $arr_all[$i+$j-2]['amt']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn menuaddbtnsi">ADD</button>
                      </div>
                </div>
                </form>
              </span>

                  <?php } ?>
                <?php $i = $i + 3; ?>
              <?php } ?>

          </div>

          <div class="row menucatr3" id="ni">
            <span class="menutitleni">North Indian</span></br />

            <?php
            $sql2 =  "SELECT * FROM menudetails WHERE cat_id=3";
            $result2  = $conn->query($sql2);
            $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
              for ($i=1; $i <= count($arr_all); ) { ?>
                	<?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if ($i+$j-2 == count($arr_all)) {
                      break;
                    }  ?>

              <span class="menucontent">
                <form action="cartpage.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
                <div class="row menunamerowdetails">
                    <div class="col-7" id="menufetch">
                      <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                      <span class="menuamt">Rs.<?php echo $arr_all[$i+$j-2]['amt']; ?> </span>
                    </div>
                      <div class="col-3">
                        <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn menuaddbtnni">ADD</button>
                      </div>
                </div>
              </form>
            </span>

                <?php } ?>
              <?php $i = $i + 3; ?>
            <?php } ?>

        </div>


        <div class="row menucatr4" id="de">
          <span class="menutitlede">Desserts</span><br />

          <?php
          $sql2 =  "SELECT * FROM menudetails WHERE cat_id=4";
          $result2  = $conn->query($sql2);
          $arr_all = $result2->fetch_all(MYSQLI_ASSOC);
            for ($i=1; $i <= count($arr_all); ) { ?>
                <?php for ($j=1; $j <= 3; $j++) { ?>
                  <?php if ($i+$j-2 == count($arr_all)) {
                    break;
                  }  ?>

            <span class="menucontent">
              <form action="cartpage.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" method="post">
              <div class="row menunamerowdetails">
                  <div class="col-7" id="menufetch">
                    <span class="menuname"> <?php echo $arr_all[$i+$j-2]['fname']; ?> </span>
                    <span class="menuamt">Rs.<?php echo $arr_all[$i+$j-2]['amt']; ?> </span>
                  </div>
                    <div class="col-3">
                      <input name="quantity" type="number" class="form-control menuqtyno" value="1" min="0" max="100" required/>
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn  menuaddbtnde">ADD</button>
                    </div>

              </div>
              </form>
            </span>

                <?php } ?>
              <?php $i = $i + 3; ?>
            <?php } ?>

        </div>

      </div>
    </div>

    <div class="col cartmod" id="modcart">
<div class="cartproceed">
    <button type="button" class="btn cartbtn float-right" style=color:"#f08080"; data-toggle="modal" data-target="#myModal">
        CART
      </button>

      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->

            <div class="modal-header">
              <h4 class="modal-title"><b>Cart<b></h4>
              <button type="button" class="btn start" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

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

            <div class="row menucartrow">

      				<div class="col-10">

                <span class="menuna" style="color:black;"> <?php echo $row3["food_name"]; ?> </span><br />
    					 <span class="menuam" style="color:black;"> <?php echo $row3["food_amt"]; ?> </span>
               <span class="menucaqty" style="color:black;"> &nbspx <?php echo $row3["food_qty"]; ?> </span>
      				</div>
              <div class="col-2" class="trash">

                <a href="trashpage.php?id=<?php echo $row3["food_id"]; ?>"><i class="fas fa-trash-alt"></i></a>
              </div>

            </div>

          <?php	} ?>



            <!-- Modal footer -->

            <div class="modal-footer">
              <div class="col-5">
              <span>
                <h5 style="text-align:right;" "padding-left:2rem";><b>Rs. <?php echo $sum; ?><b></h5></span></div>
                  <div class="col-7 menucartproceed">
                    <form action="cart.php#userdetails">
                      <button type="submit" class="btn menuproceed"  style=color:"#ff7f50;">PROCEED</button>
                    </form>
                  </div>
    			<?php }
          else { ?>

                       <h3 style="padding:2.5rem; padding-top:0; text-align:center;">Your cart is empty!</h3>

                   <?php } ?>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
    </div>


     </body>
     </html>
