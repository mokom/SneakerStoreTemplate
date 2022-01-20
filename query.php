<?php 

class Products extends DatabaseConnection {

    public function fetchproducts() {
        $products = $this->connect()->query("SELECT * FROM products");
        // while ($row = $products->fetch()) {
        //     $product = $row['title'];
        //     return $product;
        // }
    }
}
?>