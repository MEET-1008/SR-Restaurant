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

  <!-- css file link  -->
  <link rel="stylesheet" href="./css/style.css" />
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <!-- AOS LINK  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <title>Contact</title>
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
            <a class="nav-link text-white ms-3" href="manu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary ms-3" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white ms-3" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="con-us">
    <div class="container container-fluid py-5 ">

      <div class="row my-3">
        <div class="heading my-4">
          <h1 class="text-center mx-auto ">
            Contact-<span class="text-primary">Us</span>
          </h1>
          <hr class="mx-auto w-25">
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 col-12">
          <div class=" brinda rounded-circle  my-5 d-flax ">
            <a href="https://www.google.com/maps/place/Sagar+Restaurants/@21.5574386,70.6934532,17.78z/data=!4m13!1m7!3m6!1s0x39580c151cf2b115:0x3e11ebe27a46e39d!2sBhesan,+Gujarat+362020!3b1!8m2!3d21.5548528!4d70.7034651!3m4!1s0x39580f985e94ee49:0x3b7eac1d52b78506!8m2!3d21.5585681!4d70.6981041">
              <h5><i class="fa-solid fa-link"></i> Location:</h5>
            </a>
            <div class="item">
              <p>Junagadh Road,Bhesan, Gujrat 362020
              </p>
            </div>

          </div>
          <div class=" brinda rounded-circle  my-5">
            <h5><i class="fa-solid fa-clock"></i> open hours:</h5>
            <div class="item">
              <p> 10 am to 4 pm <b>&</b>
                7:00 pm to 12:00 am
              </p>
            </div>
          </div>
          <div class=" brinda rounded-circle ">
            <div class=" brinda rounded-circle  my-5">
              <h5><i class="fa-solid fa-envelope-circle-check"></i> Email:</h5>
              <div class="item">
                <p>...@gmail.com
                </p>
              </div>
            </div>
          </div>
          <div class=" brinda rounded-circle my-5">
            <div class=" brinda rounded-circle  my-5">
              <h5><i class="fa-solid fa-phone-flip"></i> Call:</h5>
              <div class="item">
                <p>7567948672
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6 col-12 bg-light">
          <div class="heading text-center">
            <h1>feedback <span class="text-primary">form</span></h1>
            <hr class="w-50 mx-auto mb-5">
          </div>
          <form method="POST">
            <input type="text" class="form-control" name="name" placeholder="full name"><br>
            <input type="mail" class="form-control" name="mail" placeholder="mail "><br>
            <input type="text " class="form-control" name="subject" placeholder="your subject"><br>
            <textarea placeholder="message" class="form-control" name="sub" cols="50"></textarea>
            <button type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
          </form>
        </div>
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



<?php

use LDAP\Result;

if (isset($_POST['submit'])) {
  include_once("conntect.php");
  //getting the post values
  $mail = $_POST['mail'];
  $name = $_POST['name'];
  $sub = $_POST['sub'];


  // Query for data insertion

  $query = "	INSERT INTO `fedback`( `mail`, `name`, `sub`) VALUES (  '$mail','$name','$sub')";

  $Result = mysqli_query($con, $query);

  if ($Result) {
    echo "<script>alert('your data successfully inserted ');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  } else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
  }
}

?>