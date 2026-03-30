<?php
include('../config/connect.php');

$id = $_POST['id'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($conn, "UPDATE customers SET 
first_name='$first',
last_name='$last',
email='$email',
phone='$phone'
WHERE id=$id");

header("Location: index.php");
