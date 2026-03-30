<?php include('../config/connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>

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
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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
    <h1>Add Customer</h1>

    <form action="store.php" method="POST">
        <input name="first_name" placeholder="First Name" required>
        <input name="last_name" placeholder="Last Name" required>
        <input name="email" placeholder="Email" required>
        <input name="phone" placeholder="Phone" required>

        <button type="submit" class="btn save">Save</button>
    </form>

    <a href="index.php" class="back">← Back</a>
</div>

</body>
</html>