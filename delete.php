<?php
$conn = mysqli_connect('localhost', 'root', '', 'lab_demo');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$id = $_GET['id'] ?? 0;

if ($id) {
    $stmt = mysqli_prepare($conn, "DELETE FROM people WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}

header("Location: read.php");
exit;
