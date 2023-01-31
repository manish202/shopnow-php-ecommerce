<?php require "header.php"; ?>
    <section class="products vh-100">
        <div class="breadcrumb">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">category</a></li>
                <li><?php echo $products[$_GET["pid"]][1]; ?></li>
            </ul>
        </div>
        <div class="container">
            <div class="for-img">
                <img class="single" src="images/<?php echo $products[$_GET["pid"]][0]; ?>" alt="">
            </div>
            <div class="for-desc">
                <h2><?php echo $products[$_GET["pid"]][1]; ?></h2>
                <h2>Rs. <?php echo $products[$_GET["pid"]][2]; ?></h2>
                <p>
                    3 GB RAM | 32 GB ROM | Expandable Upto 256 GB 16.56 cm (6.52 inch) HD+ Display 12MP + 2MP | 5MP Front Camera 5000 mAh Battery Helio G70 Processor
                </p>
                <a href="#">add to cart</a>
                <a href="#">add to wishlist</a>
            </div>
        </div>
    </section>
<?php require "footer.php"; ?>