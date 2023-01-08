<?php
include '../../config.php';
$id = $_GET['productid'];
$sql = "select * from `products` where id=$id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$display_name = $row['Product_Name'];
$display_desc = $row['product_desc'];
$display_price = $row['price'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../styles/home.css" />
    <title>ESHOP | Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <section class="menu">

        <a href="Home.php">

            <h3> ESHOP</h3>
        </a>
        <ul>

            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a></li>
        </ul>
    </section>


    <!-- product display page -->

    <section>
        <div class="product-display">
            img
        </div>
        <div class="product-specs">
            <h3><?php echo $display_name ?></h3>
            <h3><?php echo $display_name ?></h3>
            <h3><?php echo $display_name ?></h3>
            <h3><?php echo $display_desc ?></h3>
            <h3><?php echo $display_desc ?></h3>
            <h3><?php echo $display_desc ?></h3>
            <h3><?php echo $display_price ?></h3>
            
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>