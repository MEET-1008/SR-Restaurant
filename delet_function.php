<?php
include 'conntect.php';
if (isset($_GET['myid'])) {
    $id = $_GET['myid'];

    $sql = "DELETE FROM items WHERE `items`.`id` =$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:adminHome.php');

        //echo "Delete";
    } else {
        echo "error";
    }
}
?>
