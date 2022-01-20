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
