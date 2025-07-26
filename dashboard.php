<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h2>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    <p>Ini adalah halaman dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>