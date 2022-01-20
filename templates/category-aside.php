<div class="category-section">
  <div class="category-menu">
    <p>New Arrivals</p>
    <ul>
      <li><a href="#">Hoodies</a></li>
      <li><a href="#">Tees</a></li>
      <li><a href="#">Shorts</a></li>
      <li><a href="#">Joggings</a></li>
    </ul>
  </div>
  <div class="filter-menu">
    <p>Filters</p>
    <ul>
      <li><a href="#">Price</a>
        <div class="slidecontainer">
          <input type="range" min="0" max="100.00" value="0" class="slider" id="myRange" onchange="filterPrice(this.value)">
          <p>Price: $<span id="demo"></span>.00</p>
        </div>
      </li>
      <li><a href="#">Ratings</a>
        <div>
          <input type="radio" id="5stars" name="rating" value="5" onclick="filterRating(this.value)">
          <label for="5stars"> > 4 stars</label><br>
          <input type="radio" id="4stars" name="rating" value="4" onclick="filterRating(this.value)">
          <label for="4stars"> > 3 stars</label><br>
          <input type="radio" id="3stars" name="rating" value="3" onclick="filterRating(this.value)">
          <label for="3stars"> > 2 stars</label><br>
          <input type="radio" id="2stars" name="rating" value="2" onclick="filterRating(this.value)">
          <label for="2stars"> > 1 star</label><br>
          <input type="radio" id="1star" name="rating" value="1" onclick="filterRating(this.value)">
          <label for="1star"> 1 star</label><br><br>
          <input type="submit" value="Submit">
        </div>
      </li>
    </ul>
  </div>
  <div class="sort-menu">
    <p>Sort</p>
    <ul>
      <li><a href="?sort=asc">Price Low to High</a></li>
      <li><a href="?sort=desc">Price High to Low</a></li>
      <li><a href="#">Newest</a></li>
      <li><a href="#">Earliest</a></li>
    </ul>
  </div>
</div>


<script type="text/javascript">
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
      output.innerHTML = this.value;
    }


</script>

<script type="text/javascript">

  // Handles getting the price value from html and passing it to filter method
  function filterPrice(price) {
    var price = parseInt(price);
    var rating = (function() { // Anonymous function that gets the rating value if rating is selected
      var rating = document.getElementsByName("rating");
      var ratingValue;

      for(i = 0; i < rating.length; i++) {
        if(rating[i].checked) {
          return rating[i].value;
        }
      }
      return 0;
    })();

    filter_data(price, rating);
  }

  // Handles getting the rating value from html and passing it to filter method
  function filterRating(rating) {
    var price = document.getElementById("myRange").value
    // console.log(price);
    // console.log(rating);
    filter_data(price, rating)
  }


  var products;

  // Handles the ajax requests to filter the products by price and rating
  function filter_data(price, rating) {
    var parameters = 'price='+price+'&rating='+rating;

    var data = new FormData();
    data.append('price', price);
    data.append('rating', rating);


    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        products = JSON.parse(this.responseText);
        // document.querySelector('.page-title').firstChild);
        document.getElementById("page-title").innerHTML = products.length + " Products Found!";
        console.log(products);
        clear();
        for (var i = 0; i < products.length; i++) {
          generateHTML(products[i]);
        }

        // console.log("passed");
        // console.log(this.responseText);
      } else {
        console.log("failed");
        console.log(this.responseText);
      }
    };
    // }

    xhr.open("POST", "fetch_data.php", true);
    xhr.send(data);

  }

  function clear() {
    const display = document.querySelector(".product-wrapper");
    while (display.firstChild) {
      display.removeChild(display.firstChild);
    }
  }

  // Generates the HTML to append products found on the page
  function generateHTML(item) {
    const productWrapper = document.querySelector(".product-wrapper");
    const product = document.createElement('div');
    const productImage = document.createElement('div');
    const pTag = document.createElement("p")
    const imageTag = document.createElement("img")
    const productMeta = document.createElement("product-meta")
    const productName = document.createElement("p")
    const productNameLink = document.createElement("a")
    const productPrice = document.createElement("p")
    const productRating = document.createElement("p")

    product.classList.add("product")
    productImage.classList.add("product-image")

    productMeta.classList.add("product-meta");
    productName.classList.add("product-name");
    productPrice.classList.add("price");
    pTag.innerText = "Quick View"
    imageTag.src = item.image;
    imageTag.width = 200;
    productNameLink.href = "_product.php"
    productNameLink.innerText = item.title;
    productPrice.style.fontSize = 15 + "px";
    productPrice.innerText = "$" + item.price;
    productRating.innerText = "Rating: " + item.rating;

    productWrapper.appendChild(product);
    product.appendChild(productImage);
    product.appendChild(productMeta)
    productImage.appendChild(imageTag);
    productMeta.appendChild(productName);
    productName.appendChild(productNameLink)
    productMeta.appendChild(productPrice)
    productMeta.appendChild(productRating)

}

</script>
