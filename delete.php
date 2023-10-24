
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all data diaplay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <button onclick="window.location.href='owner.php';" class="btn btn-primary my-5">
            Add item
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Offer</th>
                    <th scope="col" style="width: 250px;">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conntect.php';
                $sql = "SELECT * FROM `items` WHERE 1";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['ID'];
                        $name = $row['name'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $offer = $row['offer'];
                        echo '
                        <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $price . '</td>
                    <td>' . $offer . '</td>
                    <td>' . $description . '</td>
                    <td>
                    
                    <button onclick="window.location.href=\'delet_function.php?myid=' . $id . '\';" class="btn btn-danger">Delete</button>
                </td>
                </tr>
                        ';
                    }

                    // echo $row['name'];
                }
                // else {
                //  echo "error";
                //}

                ?>


            </tbody>
        </table>
    </div>
</body>
</html>
