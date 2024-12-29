<?php
@include 'config.php';
session_start();

// Jika pengguna tidak login, arahkan ke halaman login
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>
</head>
<body>
    <header>
        <a href="#" class="nav-logo">Create Z</a>
        <nav>
            <a href="user_page.php">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="jenis.php">Type of Competition</a>
            <a href="q&a.php">Q&A</a>
            <a href="riwayat.php">History</a>
            <a href="logout.php">Logout</a>
        </nav>   
    </header>

    <div class="container">
        <div class="big-box">
            <h1>Tentang Create Z</h1>
            <p>Create Z adalah singkatan dari kreativitas gen z yang berupa  platform inovatif yang dirancang untuk menyediakan berbagai lomba bagi mahasiswa, membantu mereka mengembangkan softskill yang penting di dunia perkuliahan dan kehidupan profesional. Dengan fokus pada pengembangan kemampuan kreatif dan kolaboratif, Create Z bertujuan untuk mempersiapkan generasi muda Indonesia menghadapi tantangan di era digital.</p>
            <p>Melalui berbagai kompetisi, peserta akan memiliki kesempatan untuk berinovasi, berkolaborasi, dan menunjukkan bakat mereka di berbagai bidang. Create Z tidak hanya mendukung pengembangan keterampilan teknis, tetapi juga mendorong pengembangan karakter, kepemimpinan, dan keterampilan interpersonal yang sangat dibutuhkan di dunia kerja.</p>
            <p>Dengan komitmen untuk membangun komunitas yang kuat dan saling mendukung, Create Z hadir sebagai wahana bagi para mahasiswa untuk belajar, berkompetisi, dan meraih prestasi. Bergabunglah dengan kami dan jadilah bagian dari perjalanan menuju masa depan yang lebih cerah!</p>
        </div>
        <div class="ket">
                <p>Lomba yang terdaftar di dalam platform Create Z sudah melalui proses seleksi yang ketat sebelum akhirnya dimasukkan ke dalam aplikasi website. 
                   Proses seleksi ini bertujuan untuk memastikan bahwa semua lomba yang tersedia memiliki kredibilitas yang tinggi, baik dari sisi penyelenggara
                   maupun hadiah yang ditawarkan. Dengan demikian, kami dapat mengurangi kemungkinan terjadinya penipuan atau informasi palsu yang dapat merugikan peserta.
                   Setiap lomba akan melalui verifikasi mendalam, yang mencakup pemeriksaan latar belakang penyelenggara, keaslian hadiah, serta kejelasan syarat dan ketentuan.
                   Hal ini kami lakukan untuk memberikan rasa aman dan nyaman bagi para peserta yang ingin berpartisipasi, serta menjaga integritas dan kepercayaan terhadap platform ini.
                </p>
        </div>
        <div class="small-boxes">
            <div class="small-box">
            <i class="fas fa-book-open"></i>
                <h2>Fasilitas Pembelajaran</h2>
                <p>Di Create Z, mahasiswa dapat mengakses berbagai informasi lomba yang dirancang khusus untuk meningkatkan softskill mereka. Dengan deskripsi yang lengkap, peserta dapat mengetahui informasi dengan cara yang menyenangkan dan efektif.</p>
            </div>
            <div class="small-box">
            <i class="fas fa-trophy"></i>
                <h2>Kesempatan Berkompetisi</h2>
                <p>Create Z menawarkan berbagai lomba yang dapat diikuti oleh mahasiswa untuk mengasah kemampuan mereka. Dengan berpartisipasi dalam kompetisi ini, mahasiswa dapat menunjukkan bakat mereka dan mendapatkan pengakuan dari industri, serta memperoleh hadiah menarik.</p>
            </div>
            <div class="small-box">
            <i class="fas fa-users"></i>
                <h2>Jaringan dan Kolaborasi</h2>
                <p>Melalui platform ini, mahasiswa dapat memperoleh koneksi dan menambah relasi bidang mereka. Create Z mendorong kolaborasi dan berbagi pengalaman, sehingga mahasiswa dapat memperluas jaringan mereka dan membangun hubungan yang berharga untuk karier mereka di masa depan.</p>
            </div>
        </div>

    </div>
</body>
</html>