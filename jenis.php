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
    <title>Jenis Lomba</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font -->
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
    <div class="container">
    <h1 class="heading"> Selamat Datang di Menu Jenis-Jenis Lomba</h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-file-alt"></i>
            <h3>Essay atau Karya Ilmiah</h3>
            <p>Lomba yang diselanggarakan untuk mengasah opini, pandangan, atau argumen  penulis mengenai suatu topik tertentu yang bersifat subjektif dan mengandung fakta</p>
            <a href="lom_limiah.php" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-comments"></i>
            <h3>Debat</h3>
            <p>Lomba yang diselenggarakan untuk mengeksplorasi topik atau isu tertentu</p>
            <a href="lom_dep.php" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>Desain Grafis</h3>
            <p>Lomba yang diselenggarakan untuk menyampaikan informasi secara visual</p>
            <a href="lom_desain.php" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-briefcase"></i>
            <h3>Business Proposal</h3>
            <p>Lomba yang diselnggarakan untuk menumbuhkan jiwa kewirausahaan dengan cara memprsentasikan rancangan bisnis </p>
            <a href="lom_plan.php" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-lightbulb"></i>
            <h3>Lomba Cerdas Cermat</h3>
            <p>Lombba yang diselenggarakan untuk mengukur ketajaman berpikir dan ketangkasan dalam menjawab pertanyaan secara cepat dan tepat</p>
            <a href="lom_lcc.php" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-video"></i>
            <h3>Video Creator</h3>
            <p>Lomba yang diselenggarakan untuk menguji kreativitas peserta dalam membuat video</p>
            <a href="lom_vid.php" class="btn">read more</a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>

</html>