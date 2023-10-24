<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- css file link  -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <!-- AOS LINK  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <title>photo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark mb-3 ">
      <div class="container-fluid ">
        <a class="navbar-brand m-auto" href="index.html">logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-white fs-4"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center me-5">
            <li class="nav-item">
              <a class="nav-link text-white mx-3" aria-current="page" href="index.html"
                >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="#">photos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-3" href="manu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white"
                href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="heading ">
        <h1 class="  text-center "><SPan class="text-primary" >P</SPan>hotos</h1>
        <hr class=" m-auto line">
    </div>

    <div class="container mt-3  container-fluid">
      <div class="image-container">
        <a href="./owner.php"><div class="image"><img src="./img/1 (2).png" alt=""></a></div>
        <a href="./display.php"><div class="image"><img src="./img/1 (1).png" alt=""></a></div>
        <a href="./delete.php"><div class="image"><img src="./img/1 (3).png" alt=""></a></div>
  
       
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


    
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
