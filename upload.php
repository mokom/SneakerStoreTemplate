<?php
  include_once 'connection.php';
?>

<?php
if (isset($_POST['upload'])) {
  // print_r($_POST);

  /////  Uploading product
  $target_dir = "images/";
  $file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $from = $_FILES["fileToUpload"]["tmp_name"];
  $to = "images/" . basename($_FILES["fileToUpload"]["name"]);

  if (move_uploaded_file($from, $to)) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }

  $title = $_POST['title'];
  $quantity = $_POST['quantity'];
  $rating = $_POST['rating'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  $query = "INSERT INTO products (title, quantity, rating, image, price, description) VALUES ('$title', '$quantity', '$rating', '$file', '$price', '$description')";

  if ($result = mysqli_query($conn, $query)) {
    header("location:category.php");
  } else {
    echo "Error: " . $query . "<br />" . $conn->error;
  }

}

 ?>



<fieldset>
  <legend>Upload a Product</legend>
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="title">Title</label><br />
    <input type="text" id="title" name="title" /><br/>
    <label for="quantity">Quantity</label><br />
    <input type="number" id="quantity" name="quantity" /><br/>
    <label for="price">Price</label><br />
    <input type="text" id="price" name="price" /><br/>
    <label for="rating">Rating</label><br/>
    <input type="number" id="rating" min="1" max="5" name="rating" /><br/>
    <label for="description">Description</label><br />
    <textarea name="description" rows="8" id="description" cols="80"></textarea><br />
    <label for="image">Image</label><br />
    <input type="file" name="fileToUpload" value="">
    <hr/>
    <input type="submit" name="upload" value="Submit">
  </form>
</fieldset>
