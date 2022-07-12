<?php
require './base_connection.php';
require './authentification.php';
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

//Lire et stocker les mots-clés entrants
$com = $_POST["fname"];
?>
<html>
    <head>
        <link rel="stylesheet" href="searchstyle.css">    
    </head>
    <body>
        <div class="container">

            <div class="products">

                <h1 class="heading">search_results</h1>

                <div class="box-container">
<!--Trouver dans deux tableaux en utilisant la méthode de l'union-->
                    <?php
                    $select_product = mysqli_query($conn, "SELECT * FROM products   WHERE name like '%$com%' UNION SELECT * FROM  products2  WHERE name like '%$com%'") or die('query failed');
                   
                    if (mysqli_num_rows($select_product) > 0) {
                        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
                            ?>

                            <form method="post" class="box" action="shoppingcar.php">
                                <img src="image/<?php echo $fetch_product['image']; ?>" alt="">
                                <<h3><?php echo $fetch_product['name']; ?></h3>
                                <p>$<?php echo $fetch_product['price']; ?></p>
                                <input type="number" min="1" name="product_quantity" value="1">
                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                            </form>
                            <?php
                        };
                    };
                    ?>
                </div>

            </div>
        </div>
    </body>
</html>