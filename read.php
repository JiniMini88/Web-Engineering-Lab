<?php
$conn = mysqli_connect('localhost', 'root', '', 'lab_demo');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$result = mysqli_query($conn, "SELECT * FROM people");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h2 {

            color: #f57224;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;

            border-collapse: collapse;
            background: white;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            color: #333;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 14px;
            color: #333;
        }

        th {
            background-color: #f57224;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            color: #f57224;
            text-decoration: none;
            
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <h2>All People</h2>
    <a href="create.php">+ Add New</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this person?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>
<?php
mysqli_close($conn);
?>
