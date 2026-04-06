<?php
include('../config/connect.php');

$id = $_POST['id'];
$title = $_POST['title'];
$genre = $_POST['genre'];
$release_year = $_POST['release_year'];
$rental_rate = $_POST['rental_rate'];

$stmt = $conn->prepare("UPDATE movies SET title = ?, genre = ?, release_year = ?, rental_rate = ? WHERE id = ?");
$stmt->bind_param("sssid", $title, $genre, $release_year, $rental_rate, $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    die("Update failed: " . $conn->error);
}
$stmt->close();


