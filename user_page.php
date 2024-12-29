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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/home.css" />
    <title>Home page</title>
</head>

<body>
    <header class="header">
        <nav>
            <div class="nav__header">
                <div class="logo nav__logo">
                    <a href="#">Create Z</a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <span><i class="ri-menu-line"></i></span>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li class="link"><a href="user_page.php">Home</a></li>
                <li class="link"><a href="about.php">About</a></li>
                <li class="link"><a href="jenis.php">Type of competition</a></li>
                <li class="link"><a href="q&a.php">Q&A</a></li>
                <li class="link"><a href="riwayat.php">History</a></li>
                <li class="link"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="section__container header__container" id="home">
            <h1>Crete Z<br />Gaspol Juara <br /> Kini Saatnya!</h1>
        </div>
    </header>

    <section class="section__container offer__container" id="offer">
        <div class="offer__image">
            <img src="img/logo1.jpg" alt="offer" />
        </div>
        <div class="offer__content">
            <h2 class="section__header"> Apa Itu Create Z?</h2>
            <p class="section__description">
                Create Z adalah singkatan dari kreativitas gen z yang berupa platform inovatif yang dirancang untuk menyediakan berbagai lomba bagi mahasiswa, membantu mereka mengembangkan softskill yang penting di dunia perkuliahan dan kehidupan profesional.
                Dengan fokus pada pengembangan kemampuan kreatif dan kolaboratif, Create Z bertujuan untuk mempersiapkan generasi muda Indonesia menghadapi tantangan di era digital.Melalui berbagai kompetisi, peserta akan memiliki kesempatan untuk berinovasi, berkolaborasi, dan menunjukkan bakat mereka di berbagai bidang.
            </p>
            <div class="offer__btn">
                <a href="about.php">
                    <button class="btn">
                        selengkapnya <span><i class="ri-arrow-right-line"></i></span>
                    </button>
                </a>
            </div>

        </div>
    </section>

    <section class="section__container service__container" id="service">
        <h3 class="section__subheader">Kategori lomba</h3>
        <h2 class="section__header">Ayo, tunjukkan kemampuanmu di kategori lomba terbaik yang kami sediakan!</h2>
        <br>
        <div class="offer__btn">
            <a href="jenis.php">
                <button class="btn">
                    selengkapnya <span><i class="ri-arrow-right-line"></i></span>
                </button>
            </a>
        </div>
        <div class="service__grid">
            <div class="service__card">
                <img src="img/essay.jpg" alt="service" />
                <div class="service__content">
                    <h4>Kami menyediakan beberapa kompetisi essay terbaik untuk Anda.</h4>
                    <p>Internasional dan Nasional</p>
                </div>
            </div>
            <div class="service__card">
                <img src="img/poster.jpg" alt="service" />
                <div class="service__content">
                    <h4>Kami mempersembahkan beberapa lomba desain poster terbaik untuk Anda</h4>
                    <p>Internasional dan Nasional</p>
                </div>
            </div>
            <div class="service__card">
                <img src="img/bisnis.jpg" alt="service" />
                <div class="service__content">
                    <h4>Kami menyediakan beberapa kompetisi rencana bisnis unggulan untuk Anda.</h4>
                        <p>Internasional dan Nasional</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section__container client__container" id="client">
        <div class="client__content">
            <h3 class="section__subheader">ULASAN</h3>
            <h2 class="section__header">Berikut Kata Mereka</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client__card">
                            <p>
                                Dengan adanya website ini membantu saya dalam mencari lomba essay dan mempermudah dalam 
                                proses pendaftarannya.
                            </p>
                            <div class="client__details">
                                <img src="img/user-1.jpg" alt="client" />
                                <div>
                                    <h4>Robert Chang</h4>
                                    <h5>Mahasiswa UDINUS</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__card">
                            <p>
                                Saya ucapkan terimakasih dengan adanya website ini saya bisa menjuarai beberapa
                                lomba debat tingkat nasional.
                            </p>
                            <div class="client__details">
                                <img src="img/user-2.jpg" alt="client" />
                                <div>
                                    <h4>Emily Rodriguez</h4>
                                    <h5>Mahasiswa UNEJ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client__card">
                            <p>
                                Setelah saya mengikuti beberapa lomba diwebsite ini saya merasa informasinya selalu Update
                                dan terpecaya.
                            </p>
                            <div class="client__details">
                                <img src="img/user-3.jpg" alt="client" />
                                <div>
                                    <h4>Michael Anderson</h4>
                                    <h5>Mahasiswa UNWAHAS</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-swiper-btns">
                    <div class="swiper-prev"><i class="ri-arrow-left-line"></i></div>
                    <div class="swiper-next"><i class="ri-arrow-right-line"></i></div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="banner__wrapper">
            <div class="banner__card">
                <img src="img/esai2.jpg" alt="banner" />
                <div class="banner__content">
                    <h4> Lomba Esai Pilnas 2</h4>
                    <p>
                        Tema lomba ini adalah "Peran Mahasiswa Sebagai Pemuda Akademisi dalam Mengatasi Permasalahan Bangsa Indonesia."
                        Peserta lomba harus merupakan mahasiswa aktif, dan esai dikirimkan secara online.
                    </p>
                </div>
            </div>
            <div class="banner__card">
                <img src="img/vid3.jpg" alt="banner" />
                <div class="banner__content">
                    <h4>Instagram Reels Competition</h4>
                    <p>
                        Tema lomba adalah "Perjuangan Melanjutkan Ke Peruruan Tinggi."
                        Pendaftaran dan pengumpulan karya dibuka dari 20 Desember 2024 hingga 25 Januari 2025.
                    </p>
                </div>
            </div>
            <div class="banner__card">
                <img src="img/bus2.jpg" alt="banner" />
                <div class="banner__content">
                    <h4>Accounting Intelligence Fair 2.0</h4>
                    <p>
                        Acara ini mencakup dua kompetisi utama: Accounting Intelligence Competition (ACTION) dan
                        Competition of National Accounting Economic through Innovation. Dengan total hadiah lebih dari
                        17 juta rupiah, pendaftaran dan pengumpulan karya berlangsung hingga 17 Januari 2025.
                    </p>
                </div>
            </div>
            <div class="banner__card">
                <img src="img/bus3.jpg" alt="banner" />
                <div class="banner__content">
                    <h4>ShARE International Business Case Competition</h4>
                    <p>
                        yang bertema "Membangun Ketahanan: Meningkatkan Ketangkasan Melalui Transformasi Organisasi."
                        Dengan total hadiah mencapai 30 juta rupiah, pendaftaran normal kini dibuka untuk peserta.
                        Biaya pendaftaran adalah Rp 200.000 untuk peserta Indonesia dan 9 USD untuk peserta internasional.
                    </p>
                </div>
            </div>
            <div class="banner__card">
                <img src="img/vid1.jpg" alt="banner" />
                <div class="banner__content">
                    <h4>Creative Reels Competition</h4>
                    <p>
                        diselenggarakan oleh Illona Tissue bekerja sama dengan BPC HIPMI Banyumas dan HIPMI PT Telkom University Purwokerto.
                        Dengan tema "Hadiah Cinta untuk Ibu," lomba ini terbuka untuk umum dan tidak dipungut biaya pendaftaran.
                    </p>
                </div>
            </div>
            <div class="banner__card">
                <img src="img/vid2.jpg" alt="banner" />
                <div class="banner__content">
                    <h4>Lomba Video</h4>
                    <p>
                        diselenggarakan oleh Bincang Buku, berlangsung dari 1 hingga 31 Desember 2024. Peserta berkesempatan untuk meraih berbagai hadiah menarik,
                        termasuk hadiah utama berupa uang tunai Rp500.000 dan merchandise dan lain sebagainya.
                    </p>
                </div>
            </div>
        </div>
    </section><br /><br />

    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="logo footer__logo">
                    <a href="#home">Create Z</a>
                </div>
                <p>
                "Temukan peluang seru tanpa batas di platform kami! Beragam lomba menarik untuk mahasiswa,
                dari tantangan kreatif hingga ajang prestasi, semuanya ada di sini."
                </p>
                <div class="footer__socials">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                    <a href="#"><i class="ri-instagram-fill"></i></a>
                    <a href="#"><i class="ri-pinterest-fill"></i></a>
                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                </div>
            </div>
            <div class="footer__col">
                <h4>Quick Links</h4>
                <ul class="footer__links">
                    <li><a href="#">Explore Destinations</a></li>
                    <li><a href="#">Exclusive Offers</a></li>
                    <li><a href="#">Travel Tips & Guides</a></li>
                    <li><a href="#">Book Your Adventure</a></li>
                    <li><a href="#">Join our Community</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Company</h4>
                <ul class="footer__links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Contact Us</h4>
                <ul class="footer__links">
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Business Inquiries</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/home.js"></script>
</body>

</html>