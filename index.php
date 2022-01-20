<?php
  include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Store</title>
</head>
<body>
  <header class="page-header">
    <div class="wrapper">
      <div class="header-logo"><a href="index.php">My Store</a></div>
      <nav class="center-nav">
        <ul>
          <li><a href="category.php">New Arrivals</a></li>
          <li><a href="category.php">Men</a></li>
          <li><a href="category.php">Women</a></li>
          <li><a href="upload.php">Upload</a></li>
        </ul>
      </nav>
      <div class="right-nav">
        <?php
          include ('templates/searchbar.php');
        ?>
        <div class="cart">
          <a href="#"><i class="fas fa-shopping-cart"></i></a>
          <span class="cart-items">0</span>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="banner">
      <div class="banner-block">
        <h6>[all new]</h6>
        <p class="subtitle">ultimate collection</p>
        <a href="category.html" class="learn-more">Shop Now</a>
      </div>
    </div>

    <div class="wrapper">
      <!-- <div class="articles"> -->
        <div class="display-item item-1">

          <p class="subtitle">Hoodies</p>
        </div>
        <div class="display-item item-2">

          <p class="subtitle">tees</p>
        </div>
        <div class="display-item item-3">

          <p class="subtitle">Shorts</p>
        </div>
        <div class="display-item item-4">

          <p class="subtitle">joggings</p>
        </div>

      <!-- </div> -->
    </div>

  </main>

  <?php
    include ('templates/footer.php');
  ?>

</body>
</html>
