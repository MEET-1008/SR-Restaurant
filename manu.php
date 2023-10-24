<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- google font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <!-- css file link  -->
  <link rel="stylesheet" href="./css/style.css" />
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <!-- AOS LINK  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <style>
    .des {
      height: 70px;
      overflow: hidden;
    }

    .price {
      color: red;
      font-size: large;
    }
  </style>
  <title>SR</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container-fluid ">
      <a class="navbar-brand" href="index.php"><span style="color: #5e9693;">Sagar</span><span style="color: white;">Restaurant</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white fs-4"><i class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center me-5">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary ms-3" href="manu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white ms-3" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white ms-3" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="manu">
    <div class="container container-fluid my-5 pt-5">
      <div class="row ">
        <div class="heading mb-4">
          <h1 class="text-center "><span class="text-primary">M</span>enu</h1>
          <hr class="mx-auto line">
        </div>

        <?php
        include_once("conntect.php");
        $sql = "SELECT * FROM items";
        $resultset = mysqli_query($con, $sql) or die("database error:" . mysqli_error($conn));
        ?>
        <?php
        while ($row = mysqli_fetch_assoc($resultset)) {
        $id =  $row['ID'];
        $name= $row['name'];
        $price= $row['price'];
        $ofer= $row['offer'];
        $image= $row['image_name'];
        $desc= $row['description'];

        echo '<div class="col-md-4 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
            <div class="card shadow mb-4">
                <div>
                    <img src=./img/' .$image. ' " alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">' .$name. '</h5>
                  
                   
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    
                    <p class="card-text des">
                  '  .$desc. '
                    </p>
                    <h5>
                       
                        <span class="price"> <s>$' .$price. '</s>  </span> &nbsp  $ ' .$ofer. '
                    </h5>
                     <button  type="submit" class="btn btn-warning my-3" name="add">Add to Cart </button>
                   
                    
                </div>
            </div>
        </form>
    </div>';



        ?>

          <!-- <div class="col-sm-12 col-md-6 col-lg-3 col-12 d-flex">
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
              <img src="./img/<?php echo $row['image_name']; ?>">

              <div class="card-body">
                <h4 class="card-title text-center pb-3"><?php echo $row['name']; ?></h4>
                <p class="card-text text-center pb-3"><?php echo $row['description']; ?></p>
                <a href="#" manu class="btn btn-primary">Add to card</a>
              </div>
            </div>
          </div> -->


        <?php } ?>

      </div>


    </div>
  </div>




  <footer class="mt-5 bg-dark">
    <div class="card-group bg-dark">

      <div class="card  bg-dark ">
        <div class="card-body  text-white ">
          <h4 class="card-title footer-text "> SR Restaurant</h4>
          <p class="footer-text">Bhesan-Junagadh Road, Bhesan Rd,<br> opp.Reliance pretroliam, <br> Bhesan, Gujrat 362020 <br>Phone:
            756***8672
          </p>
        </div>
      </div>
      <div class="card bg-dark ">
        <div class="card-body text-white">
          <h5 class="card-title footer-text">Social Media</h5>
          <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

          <!-- <a href="#" class="fa fa-twitter">  </a><br>
            <a href="#" class="fa fa-facebook"> facebook </a><br>
            <a href="#" class="fa fa-instagram"> instagram </a><br>
            <a href="#" class="fa fa-whatsapp"> whatsapp </a><br> -->



          <i class='fab fa-whatsapp-square' style='font-size:20px;color: green; margin-top: 15px;'>
            <p id="whatsapp"> Whatsapp</p>
          </i><br>
          <i class='fab fa-instagram-square' style='font-size:20px;color: rgb(202, 77, 35);'>
            <p id="whatsapp"> instagram</p>
          </i><br>
          <i class='fab fa-facebook-square' style='font-size:20px;color: rgb(47, 103, 181);'>
            <p id="whatsapp"> facebook</p>
          </i><br>
          <i class='fab fa-twitter-square' style='font-size:20px;color: rgb(13, 74, 216);'>
            <p id="whatsapp"> twitter</p>
          </i>

          <p class="footer-text">

          </p>
        </div>
      </div>
      <div class="card bg-dark ">
        <div class="card-body text-white">
          <h5 class="card-title  footer-text ">Openning Hour</h5>
          <p class="footer-text">Monday-Friday: 10:00-24:00<br>Tuesday: 4 PM: Till Mid Night <br> Saturday: 10:00-16:00 <br>Sunday: 8 AM: Till Mid Night
          </p>
        </div>
      </div>
      <div class="card bg-dark ">
        <div class="card-body text-white">
          <h5 class="card-title footer-text ">Branch Info</h5>
          <p class="footer-text">Yogi Chock, Surat<br>Kalavad Road, Rajkot <br> Sindhu Bhavan Road, Ahmedabad <br> Marin Drive, Mumbai
          </p>
        </div>
      </div>
    </div>

    <div class="card text-center text-white ">

      <div class="card-body bg-dark ">
        <p>
        © Copyright Restaurantly.all rights reserved <br> designed by <span class="text-primary">MEET , JAY</span>
        </p>
      </div>
        
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>


</html>



