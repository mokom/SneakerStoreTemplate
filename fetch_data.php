<?php
  include_once 'connection.php';
?>

<?php
  $query = "SELECT * FROM products";

  // If a price is parsed, filter database by price
  if(isset($_POST['price'])) {
    if ($_POST["price"] > 0) {
      $query .=" WHERE price = ".$_POST['price'];
    }
  }

  // If a rating is parsed, filter database by rating
  if (isset($_POST["rating"])) {
    if (($_POST["rating"] > 0) && ($_POST["price"] > 0))  {
      $query .=" AND rating = ".$_POST['rating'];
    } elseif ($_POST["rating"] > 0){
      $query .=" WHERE rating = ".$_POST['rating'];
    }
  }

  if ($result = mysqli_query($conn, $query)) {
    $emptyArray = array();
    while($row = mysqli_fetch_assoc($result)) {
      $emptyArray[] = $row;
    }
    echo json_encode($emptyArray);
  }
  // echo $query;
?>
