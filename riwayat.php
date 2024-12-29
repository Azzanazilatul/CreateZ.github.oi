<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/riwayat.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>
</head>

<body>
    <header>
        <a href="#" class="nav-logo">Create Z</a>
        <nav>
            <a href="user_page.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="jenis.php">Type of competition</a>
            <a href="q&a.php">Q&A</a>
            <a href="riwayat.php">History</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <body>
        <h1>Riwayat Notifikasi</h1>
        <div id="notification-container"></div>
        <script src="js/riwayat.js"></script>
    </body>

</html>