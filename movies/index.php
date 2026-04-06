<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - MovieRental</title>
    <style>
        :root {
            --bg: #f6f8fb;
            --card: #ffffff;
            --accent: #2b7be4;
            --muted: #6b7280;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: #111827;
            padding: 24px;
        }

        .container {
            max-width: 980px;
            margin: 0 auto;
            background: var(--card);
            padding: 18px;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 8px;
        }

        h1 {
            margin: 0;
            font-size: 1.4rem;
        }

        a.button {
            display: inline-block;
            padding: 8px 12px;
            background: var(--accent);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 0.95rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
            background: #fff;
        }

        th,
        td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid #eef2f7;
            font-size: 0.95rem;
        }

        th {
            background: #f8fafc;
            color: #374151;
            font-weight: 600;
        }

        .actions a {
            color: var(--accent);
            text-decoration: none;
            margin-right: 8px;
            font-size: 0.9rem;
        }

        .empty {
            padding: 28px;
            text-align: center;
            color: var(--muted);
        }

        .meta {
            margin-top: 12px;
            color: var(--muted);
            font-size: 0.9rem;
        }

        @media (max-width: 640px) {

            th,
            td {
                padding: 8px;
                font-size: 0.88rem;
            }

            header {
                flex-direction: column;
                align-items: stretch;
                gap: 8px;
            }

            a.button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Movies</h1>
            <a class="button" href="create.php">Add Movie</a>
        </header>

        <hr>

        <?php include('../config/connect.php'); ?>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM movies ORDER BY movie_id DESC")
            or die("Query Error: " . mysqli_error($conn));
        $movie_count = mysqli_num_rows($result);
        ?>

        <?php if ($movie_count > 0): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release Year</th>
                    <th>Rental Rate</th>
                    <th>Actions</th>
                </tr>

                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo (int)$row['movie_id']; ?></td>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo htmlspecialchars($row['genre']); ?></td>
                        <td><?php echo htmlspecialchars($row['release_year']); ?></td>
                        <td><?php echo htmlspecialchars($row['rental_rate']); ?></td>
                        <td class="actions">
                            <a href="edit.php?id=<?php echo (int)$row['movie_id']; ?>">Edit</a> |
                            <a href="delete.php?id=<?php echo (int)$row['movie_id']; ?>" onclick="return confirm('Delete this movie?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>

            </table>

            <p class="meta">Total movies: <?php echo $movie_count; ?></p>

        <?php else: ?>

            <div class="empty">
                <p>No movies yet</p>
                <p><a class="button" href="create.php">Add Movie</a></p>
            </div>

        <?php endif; ?>

    </div>
</body>

</html>