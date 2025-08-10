<?php
$username = $_POST['username'] ?? '';
$password = $_POST['pass'] ?? '';
$confirm = $_POST['cpass'] ?? '';

if (empty($username) || empty($password) || empty($confirm)) {
    echo "All fields are required. <a href='javascript:history.back()'>Go Back</a>";
    exit;
}

if ($password !== $confirm) {
    echo "Passwords do not match. <a href='javascript:history.back()'>Go Back</a>";
    exit;
}
else {
    echo "Login successful! Welcome, $username.";
}
?>
