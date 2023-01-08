<?php
include '../../config.php';
if (isset($_GET['deleteid'])) { // getting params from url i.e id
    $delete_id = $_GET['deleteid'];

    $sql = "delete from `products` where id=$delete_id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
       
        header('location:products.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>