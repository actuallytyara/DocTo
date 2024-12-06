<?php
// Redirect ke halaman lain setelah 5 detik
header("refresh:5;url=Tentang.php");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocTo - tentang</title>
    <link rel="stylesheet" href="styletentang2.css">
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar">
            <h1 class="logo">DocTo</h1>
            <ul class="nav-links">
                <li><a href="Register.php">Register</a></li>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#">Artikel</a></li>
                <li><a href="#">Katalog Obat</a></li>
                <li><a href="Tentang.php">Tentang</a></li>
            </ul>
        </div>
    </nav>
</body>


    <div class="container">
        <section class="about">
         <div class="about-image">
             <img src="Dokter.jpg" alt="Dokter" width="460" height="300">
         </div>
        </section>
        <div class="about-content">
          <h2>About Us</h2>
              <p>Kami menyediakan Layanan Kesehatan yang unggul dan sangat bermanfaat untuk kebutuhan kesehatan anda
              terutama untuk kebutuhan keluarga, Pada web ini kami tersedia layanan chat dengan dokter langsung, artikel maupun penjualan online
              obat secara langsung, Perusahaan kami berada di jepang dan didirikan pada Tahun 2014, Kami sangat menghormati anda
              Kami disini melayani anda 24 jam, Anda sehat Kami senang.
              </p>
              <a href="readmore.php" class="read-more">Read more</a>
         </div>
    </div>
</div>

<footer>
  <p>&copy; 2024 DocToaja. hak ini dilindungi Undang-Undang.</p>
</footer>

</html>