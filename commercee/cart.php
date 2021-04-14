<?php
ob_start();
        // include header.php file
        include ('header.php');
        ?>
                
      <?php
        /*  include cart items if it is not empty */
        count($product->getData('cart')) ? include ('cart2.php') :  include ('not-found/cart_notfound.php');
        /*  include cart items if it is not empty */

        /*  include top sale section */
        count($product->getData('wishlist')) ? include ('wishlist.php') :  include ('not-Found/wishlist_notFound.php');
        /*  include top sale section */

        // include new phones.php file
        include ('new-phones.php');
        ?>

      <?php
        // include footer.php file
        include ('footer.php');
        ?>