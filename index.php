<?php
include 'articles.php';
include 'catalog.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocTo - Artikel dan Katalog Obat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar">
            <h1 class="logo">DocTo</h1>
            <ul class="nav-links">
                <li><a href="Register.php" class="tbl-ijo" >Register</a></li>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#">Artikel</a></li>
                <li><a href="#">Katalog Obat</a></li>
                <li><a href="Tentang.php">Tentang</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="content">
        <!-- Artikel -->
        <section class="articles">
            <?php foreach ($articles as $article): ?>
            <article class="article">
                <!-- Gambar Thumbnail -->
                <img src="<?php echo $article['thumbnail']; ?>" alt="<?php echo $article['title']; ?>"
                    class="article-thumbnail">

                <!-- Konten Artikel -->
                <div class="article-content">
                    <h2><?php echo $article['title']; ?></h2>
                    <p><?php echo $article['description']; ?></p>
                    <a href="<?php echo $article['link']; ?>" target="_blank" rel="noopener noreferrer">
                        <a href="<?php echo $article['link']; ?>" target="_blank" rel="noopener noreferrer"
                            class="read-more-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                                style="margin-right: 5px;">
                                <path d="M8 4l8 8-8 8" fill="none" stroke="currentColor" stroke-width="2"></path>
                            </svg>
                        </a>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </section>


        <!-- Katalog -->
        <aside class="catalog">
            <h2>Katalog Obat</h2>
            <div class="catalog-container">
                <?php foreach ($catalog as $item): ?>
                <div class="catalog-card">
                    <h3><?php echo $item['name']; ?></h3>
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" class="catalog-image">
                    <p><?php echo $item['description']; ?></p> <br>
                    <div class="catalog-price">
                    <p><?php echo $item['price']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </aside>
    </main>
</body>

<footer>
  <p>&copy; 2024 DocToaja. hak ini dilindungi Undang-Undang.</p>
</footer>

</html>