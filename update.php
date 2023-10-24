<?php
include 'conntect.php';
$id = $_GET['myid'];
$sql = "SELECT * FROM `items` WHERE `id` = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$myname = $row['name'];
$myprice = $row['price'];
$myoffer = $row['offer'];
$my1description = $row['description'];



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $offer = $_POST['offer'];



    $sql = "UPDATE `items` SET `name` = '$name', `description` = '$description', `price` = '$price', `offer` = '$offer' WHERE `items`.`id` = $id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Data Sucessfully Updated";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
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

    <title>update data</title>
    <style>
      
#form3Example1c{
    border: none;
    border-bottom: 2px solid black;
    border-radius: 0px;
}
.Description_a{
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
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p id="" class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> Update Items</p>

                                    <form class="mx-1 mx-md-4" method="post" enctype="multipart/form-data">

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="name" placeholder="Item Name" value="<?php echo $myname ?>" autocomplete="off"/>
                                                <label class=" form-label"></label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="number" id="form3Example1c" class="form-control" name="price" value="<?php echo $myprice ?>" autocomplete="off" />
                                                <label class="form-label" for="form3Example3c">Item Price</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="number" id="form3Example1c" class="form-control" name="offer" value="<?php echo $myoffer ?>" autocomplete="off"/>
                                                <label class="form-label" for="form3Example4c">Offer for items</label>
                                            </div>
                                        </div>
<!-- 
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="file" id="form3Example1c" class="form-control" name="image_name" value="">
                                            </div>
                                        </div> -->

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <textarea type="text" class="Description_a" name="description" cols="46" rows="5" placeholder="Description" value="" autocomplete="off"><?php echo  $my1description ?></textarea>

                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" style="background-color: #5e9693;" class="btn btn-primary btn-lg" name="submit">Update</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <div class="col-lg-12">
                                        <div class="row" style="text-align: center;">
                                            <p style="font-size: 30px; color: #5e9693;">Sagar<span style="color: black;">Restaurant</span></p>

                                        </div>
                                        <div class="row-lg-12">
                                            <img src="./img/2.jpg" class="img-fluid" alt="Sample image">
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