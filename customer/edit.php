<?php
include('../config/connect.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM customers WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Customer</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .save {
            background: #28a745;
        }

        .back {
            background: gray;
            text-decoration: none;
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            color: white;
            border-radius: 5px;
        }

        .save:hover {
            background: #218838;
        }

        .back:hover {
            background: #555;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Edit Customer</h1>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <input name="first_name" value="<?= $data['first_name'] ?>" required>
            <input name="last_name" value="<?= $data['last_name'] ?>" required>
            <input name="email" value="<?= $data['email'] ?>" required>
            <input name="phone" value="<?= $data['phone'] ?>" required>

            <button type="submit" class="btn save">Update</button>
        </form>

        <a href="index.php" class="back">← Back</a>
    </div>

</body>

</html>