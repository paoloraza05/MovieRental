<?php
include '../config/connect.php';

$title = $_POST['title'];
$genre = $_POST['genre'];
$release_year = $_POST['release_year'];
$rental_rate = $_POST['rental_rate'];

mysqli_query($conn, "INSERT INTO movies 
    (title, genre, release_year, rental_rate) 
    VALUES ('$title', '$genre', '$release_year', '$rental_rate')");

header("Location: index.php");


