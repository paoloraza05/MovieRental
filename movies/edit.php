<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>   

    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Edit Movie</h1>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $movie['id']; ?>">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $movie['title']; ?>" required>

        <label for="director">Director:</label>
        <input type="text" id="director" name="director" value="<?php echo $movie['director']; ?>" required>

        <label for="release_year">Release Year:</label>
        <input type="number" id="release_year" name="release_year" value="<?php echo $movie['release_year']; ?>" required>

        <button type="submit">Update Movie</button>
    </form>

    <a href="../index.php">Back to Movie List</a>
</body>
</html>