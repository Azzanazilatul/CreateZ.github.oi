<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomba Debat</title>
    <link rel="stylesheet" href="css/lomba.css">
    <link rel="stylesheet" href="css/ilmiah.css">
    <link rel="icon" href="icon.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <header class="navbar">
        <div class="navbar-container">
            <a href="javascript:history.back()" class="back-btn">
                <i class="fas fa-arrow-left"></i>
            </a>

            <div class="nav-logo">
                <a href="#">Create Z</a>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Cari lomba..." id="search" class="search-input">
                <button type="button" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <nav class="navbar-menu">
                <ul>
                    <li><a href="user_page.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="riwayat.php">History</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="competition-container">
        <div class="competition-item">
            <img src="img/debat1.jpg" alt="Lomba 1" class="competition-image">
            <div class="competition-details">
                <h3 class="competition-title">Lomba Debat Nasional</h3>
                <p class="competition-date">Tanggal:  28 februari 2025</p>
                <div class="accordion">
                    <button class="accordion-btn">Lihat Detail</button>
                    <div class="accordion-content">
                        <pre><p><span class="label">Deskripsi  :</span>Lomba Debat nasional dan peluang dalam <br> meningkatkan kualitas pendidikan di Indonesia </p></pre>
                        <p><span class="label">Penyelenggara :</span> beyondinspirasi</p>
                        <p><span class="label">Kategori Peserta :</span>Mahasiswa aktif tingkat D1/D2/D3/S1.</p>
                        <p><span class="label">Hadiah :</span> Edu trip ke Singapura dan Malaysia dan uang jutaan rupiah</p>
                        <p><span class="label">Tipe Lomba :</span> Kelompok (3 Orang)</p>
                    </div>
                </div>
                <button class="apply-btn" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSfYZpVK-D7AYnLhNX3aieF3J2Bhi-RjxbRt9X7lNmGM8Vxf3w/viewform ';">Apply</button>
            </div>
        </div>


    <script src="js/script.js"></script>

</body>
</html>
