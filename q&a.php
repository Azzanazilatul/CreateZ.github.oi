<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('Location: login_form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q & A</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/q&a.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <a href="jenis.php">Type of Competition</a>
            <a href="q&a.php">Q&A</a>
            <a href="riwayat.php">History</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <body>
        <div class="container">
            <h1>Tanya & Jawab</h1>
            <div id="comment-section">
            </div>
            <textarea id="comment-input" placeholder="Tulis komentar..."></textarea>
            <button id="submit-comment">Kirim Komentar</button>
        </div>
        <script src="js/q&a.js"></script>
    </body>

</html>