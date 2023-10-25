<?php 
//Databse Connection file
if (isset($_POST['submit']) && isset($_FILES['image_name'])) {
	include_once("conntect.php");
  	//getting the post values
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $offer=$_POST['offer'];
    $image_name = $_FILES["image_name"]["name"];
    $tempname = $_FILES["image_name"]["tmp_name"];
    $folder = "./img/" . $image_name;   
   
  // Query for data insertion
  
     $query="insert into items(name,image_name,description, price, offer) value('$name','$image_name','$description', '$price', '$offer')";

     mysqli_query($con, $query);

    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='adminHome.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <title>add to item</title>
    <style>
      
#form3Example1c{
    border: none;
    border-bottom: 2px solid black;
    border-radius: 0px;
    position: relative;

}
.form-label{
    display: inline-block;
}
.Description{
    resize: none;
}
.img-fluid{
    box-shadow: 10px 10px 10px gray;
}

    </style>
</head>

<body>
    <section class="vh-100" style="background-image: url(./img/4.jpg);">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5" >
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p id="" class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> Add Items</p>

                                    <form class="mx-1 mx-md-4" method="post" enctype="multipart/form-data">

                                        <div class="d-flex flex-row align-items-center mb-0">
                                            
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="name" required/>
                                                <label class="" for="form3Example3c">Item Name</label>
                                            </div>
                                        </div>

                      

                                        <div class="d-flex flex-row align-items-center mb-0">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="number" id="form3Example1c" class="form-control" name="price" required/>
                                                <label class="" for="form3Example3c">Item Price</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="number" id="form3Example1c" class="form-control" name="offer" required/>
                                                <label class="" for="form3Example4c">Offer for items</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="file" id="form3Example1c" class="form-control" name="image_name" value="" required>
                                            </div>
                                        </div>
 
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <textarea type=" text" class="Description" name="description"  cols="46" rows="5" placeholder="Description" ></textarea>
                                                
                                            </div>
                                        </div>

                                        

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" style="background-color: #5e9693;" class="btn btn-primary btn-lg" name="submit">Submit</button>
                                            <a href="adminHome.php"><div type="" style="background-color: #5e9693; margin-left: 20px; " class="btn btn-primary btn-lg" name="">back</div></a>
                                        </div> 
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                           
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <div class="col-lg-12">
                                     <div class="row" style="text-align: center;">
                                         <p style="font-size: 30px; color: #5e9693;">Sagar<span style="color: black;">Restaurant</span></p>
 
                                     </div>
                                     <div class="row-lg-12">
                                         <img  src="./img/2.jpg" 
                                         class="img-fluid" alt="Sample image">
                                     </div>
                                    </div>
                                    
 
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>