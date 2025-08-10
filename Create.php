<?php
$conn = mysqli_connect('localhost', 'root', '', 'lab_demo');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($name && $email) {
        $stmt = mysqli_prepare($conn, "INSERT INTO people (name, email) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $email);
        mysqli_stmt_execute($stmt);
        echo "Person added successfully. <a href='read.php'>View All</a>";
    } else {
        echo "All fields required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Person</title>
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
        form {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input {
            width: 100%;
            padding: 10px 0 10px 0;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        input:focus {
            border-color: #f57224;
            border-width: 2px;
            outline: none;
        }
        button {
            background-color: #f57224;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        button:hover {
            background-color: #e65c1f;
        }
        button:active {
            background-color: #d44e1a;
        }
    </style>
</head>
<body>

<form method="post">
    <h2>Add New Person</h2>
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <button type="submit">Add</button>
</form>

</body>
</html>
<?php
mysqli_close($conn);
?>
