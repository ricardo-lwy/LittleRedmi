<?php
include 'base_connection.php';
include './authentification.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Redmi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <!--font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">     
        <!-- link css et js-->
        <link rel="stylesheet" href="style.css">     
    </head>
    <body >  
        
    <!--header section -->  
    <header class="header">
        <img src="image/mi.png" width="40" height="40" />   <!--logo redmi-->
        
        <nav class="navbar">
            <a href="#telephones">téléphone</a>       <!-- link of Boutique -->
            <a href="#TVs">télévision</a>    <!-- link of Smartphone -->
            <a href="#review">commentaires</a>    <!-- link of Smart Home -->
        </nav>
        
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>         <!-- button of menu -->
            <div class="fas fa-search" id="search-btn"></div>      <!-- button of search -->
            <div class="fas fa-shopping-cart" id="cart-btn"></div>   <!-- button of shopping-cart -->
            <div class="fas fa-user" id="login-btn"></div>             <!-- button of login -->
        </div>
        <form action="search_result.php" class="search-form" method="post">


            <input type="text" name="fname" id="search-box" placeholder="chercher ici...">
            <input type="submit" class=""   value=" ">
        </form>
       
        
        
        <div class="shopping-cart">    <!-- block of shopping-cart -->
            <div class="box">               
            </div>
            <a href="shoppingcar.php" class="btn">Voir mon panier</a>

        </div>

       <?php if (isset($session_nom)) { ?>             
        <div  class="login-form" >     <!-- block of login -->
            <p style="font-size:1.7rem; color:red"> Bonjour! <?php echo "$session_nom"; ?> </p>
            <a href="logout.php"> Se deconnecter </a>
        </div>
      <?php } else { ?>
        <div  class="login-form" >     <!-- block of login -->
            <p><a href="login.php">     Se connecter </a></p>
            <a href="inscription.php"> S'inscrire</a>
        </div>  
      <?php } ?>    
        
    </header>
    
    
    
    <!--Home section starts -->

       <section class="home" id="home">
        <div class="content">
            <h3>Redmi Note 11 Pro+5G</h3>
            <p>HyperCharge 120W|Écran AMOLED DotDisplay 120 Hz FHD+</p>
            <p id="prix">Des 399.90€</p>
        
        </div>
    </section>
    
    
    
    
    
    
    
    
    
        <!--Home section ends --> 
    <section class="telephones" id="telephones">
        
        <h1 class="heading">  Redmi<span>téléphone</span> </h1>

<div class="swiper telephones-slider">

<div class="swiper-wrapper">
   <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
        
            <form method="post" class="swiper-slide box" action="">
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
    </section>
        
        
    <section class="TVs" id="TVs">
        <h1 class="heading">  Redmi<span>télévision</span> </h1>
        <div class="swiper TVs-slider">
        <div class="swiper-wrapper">
            <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products2`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
        
            <form method="post" class="swiper-slide box" action="">
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
    </section>   
    
<section class="review" id="review">

    <h1 class="heading"> Les <span>Commentaires</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <p>Développe toujours des produits intéressants!</p>
                <h3>fakjf djaofj</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>La qualité du téléphone est particulièrement bonne!</p>
                <h3>john hfiaof</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Excellent service, il m'a aidé à résoudre de nombreux problèmes liés à mon achat.</p>
                <h3>fhlkwqfn deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>La livraison a été exceptionnellement rapide!</p>
                <h3>jgspg sdo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
    </section>    
        <!--footer-->
    <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> SUIVEZ-NOUS</h3>
            <div class="share">
                <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <h3>NOUS CONTACTER</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-789 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> Redmi@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Reims France </a>
        </div>
        <div class="box">
            <h3>Liens rapides</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#telephones" class="links"> <i class="fas fa-arrow-right"></i> telephones </a>
            <a href="#TVs" class="links"> <i class="fas fa-arrow-right"></i> TVs </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
        </div>
        <div class="box">
            <h3>RESTONS EN CONTACT</h3>
            <input type="email" placeholder="e-mail" class="email">
            <input type="submit" value="s'abonner" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>
    </div>
    <div class="credit"> created by <span>  WeiYi LIU et Yi YIN </span> | all rights reserved </div>
</section>
    <!-- js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="style.js"></script>
    </body>
</html>
