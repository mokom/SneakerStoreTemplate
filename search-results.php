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
  <title>Category Page</title>
</head>
<body>
  <?php
    include ('templates/header.php');
  ?>

  <!-- Main Section -->
  <div class="category-wrapper">
    <?php
      include ('templates/category-aside.php');
    ?>

    <div class="products">
      <div class="page-title">
        <h1 id="page-title"></h1>
        <p class="pagination">
          Page 1 of 3 <span class="next-btn">Next</span>
        </p>
      </div>
      <div class="product-wrapper" id="product-wrapper">
        <?php
            if (isset($_GET["q"])) {

              $q = $_GET["q"];
              
              $query = "SELECT * FROM products WHERE title LIKE '%$q%'"; // OR description LIKE '%$q%'";

              $results = mysqli_query($conn, $query);
              // print_r($query);
              // echo (mysqli_num_rows($query));

              if (mysqli_num_rows($results) > 0) {
                displayResults($results);
              } else {
                echo "Nothing was found";
              }
            }

            if (isset($_GET['sort'])) {
              $sort = $_GET['sort'];
              $query = "SELECT * FROM products ORDER BY price $sort";
              $sortQuery = mysqli_query($conn, $query);
              displayResults($sortQuery);
            }



         ?>
      </div>
    </div>

  </div>
  <!-- End Main Section-->

  <?php
    include ('templates/footer.php');
  ?>
</body>
</html>

<?php
function displayResults($query) {
  while($row = mysqli_fetch_array($query)) {
    echo '<div class="product">
      <div class="product-image">
        <p>Quick View</p>
        <img src="'.$row["image"].'" alt="" width="200">
      </div>
      <div class="product-meta">
        <p class="product-name"><a href="product.php">'.$row["title"].'</a></p>
        <p class="price" style="font-size: 15px;">$'.$row["price"].'</p>
        <p>Rating: '.$row["rating"].'</p>
      </div>
    </div>';
  }
}
?>
