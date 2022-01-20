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

  <main class="detail-wrapper">
    <div class="product-section">
      <div class="product-image">
        <img src='https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/i1-9cfea66d-b519-4b29-8e43-ce4164e8c558/adapt-bb-2-tie-dye-basketball-shoe-vdFwKS.jpg' alt="product-image" width="550" height="800"/>
        <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/i1-9cfea66d-b519-4b29-8e43-ce4164e8c558/adapt-bb-2-tie-dye-basketball-shoe-vdFwKS.jpg" width="106" height="150" />
        <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/i1-9cfea66d-b519-4b29-8e43-ce4164e8c558/adapt-bb-2-tie-dye-basketball-shoe-vdFwKS.jpg" width="106" height="150" />
        <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/i1-9cfea66d-b519-4b29-8e43-ce4164e8c558/adapt-bb-2-tie-dye-basketball-shoe-vdFwKS.jpg" width="106" height="150" />
        <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/i1-9cfea66d-b519-4b29-8e43-ce4164e8c558/adapt-bb-2-tie-dye-basketball-shoe-vdFwKS.jpg" width="106" height="150" />
        <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/i1-9cfea66d-b519-4b29-8e43-ce4164e8c558/adapt-bb-2-tie-dye-basketball-shoe-vdFwKS.jpg" width="106" height="150" />
      </div>
      <div class="product-detail">
        <h1>Nike Adapt BB 2.0</h1>
        <p class="price">$40.0</p>
        <span class="product-reviews">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </span> 25 Reviews
        <hr>
        <form action="" method="">
          <div class="size-section">
            <label for="size">Size: </label>
            <select class="size-option" name="size" id="size">
              <option value="">Choose a Size</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
              <option value="2xl">2XL</option>
            </select><br/>
            <div class="qty">
              <label for="qty">Quantity: </label>
              <input type="number" id="qty" name="qty" value="1">
            </div>
          </div>

          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nesciunt natus laborum laboriosam debitis? Eligendi cum, nemo blanditiis quae error beatae facilis tempora repudiandae, perspiciatis eos, labore doloremque quia. Temporibus fugiat, sunt reiciendis ex neque suscipit doloribus eos consectetur perferendis quasi fuga velit pariatur a iste reprehenderit debitis. Dolorem, eius quisquam facilis. Quasi laborum delectus explicabo, animi perspiciatis porro esse consequuntur possimus fuga in commodi minus cum! Eius incidunt, sit odit. Provident libero aut, placeat commodi dicta nemo ratione quos quasi voluptas quo ipsum itaque accusantium aspernatur illum reiciendis a magni sed blanditiis voluptates, totam perferendis inventore temporibus. Laborum unde, mollitia quidem nam impedit. Cumque necessitatibus, odit cum ipsam sit? Aspernatur adipisci natus incidunt ullam magnam quidem dolores. Vero nam commodi repellat in, deleniti aut ipsum, tenetur, quis aspernatur aliquam sit, iure quidem alias culpa expedita. Officia architecto, officiis explicabo ipsa, dolores quidem esse repellat animi, quis molestias tenetur natus perferendis mollitia labore suscipit, iusto sed deserunt! Aperiam laborum veritatis, velit est dolores tempora asperiores minima nemo, voluptas doloribus sint. Blanditiis nulla qui quae quam aperiam voluptates alias voluptatum praesentium ratione ad aliquam optio suscipit sequi et accusantium similique cum, ullam ab, ex vitae unde, deserunt cupiditate atque, incidunt. Delectus.
          </p>
          <input type="button" name="addToCart" value="Add to Cart" class="addCart">
        </form>



      </div>
    </div>
    <hr />
    <div class="review-section">
      <h1>Write a Review</h1>
      <span>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </span> From 25 Reviews
      <form class="review-form" action="index.html" method="post">

          <div class="">
            <input type="text" id="fname" placeholder="First Name">

            <input type="text" id="lname" placeholder="Last Name">
          </div>

          <label for="review">Review</label><br/>
          <textarea name="name" rows="8" cols="79" placeholder="What do you think?"></textarea>
          <input type="submit" name="submit" value="Submit">

      </form>
    </div>
  </main>

  <?php
    include ('templates/footer.php');
  ?>
</body>
</html>
