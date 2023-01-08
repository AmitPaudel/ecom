<?php
$servername='localhost';
$username='root';
$password='';
$database='ecommerce';

$conn=new mysqli($servername,$username,$password,$database);

if (!$conn) {
    die(mysqli_error($conn));
 
}
