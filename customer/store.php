<?php
include('../config/connect.php');

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($conn, "INSERT INTO customers 
(first_name, last_name, email, phone) 
VALUES ('$first', '$last', '$email', '$phone')");

header("Location: index.php");
