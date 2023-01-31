<?php require "header.php"; ?>
    <div class="owl-carousel owl-carousel-top owl-theme owl-loaded owl-drag slider">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <div class="img-box">
                        <img src="images/shopping-girl.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item">
                    <div class="img-box">
                        <img src="images/shopping-girl-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="products">
        <div class="title-box">
            <h2>popular products</h2>
        </div>
        <div class="owl-carousel owl-carousel-popular owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php
                        for($i=100;$i<107;$i++){
                            echo "<div class='owl-item'>";
                            echo getCard($i,$products[$i]);
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
            <div class="owl-dots"></div>
        </div>
    </section>
    <section class="products">
        <div class="title-box">
            <h2>latest products</h2>
        </div>
        <div class="owl-carousel owl-carousel-latest owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php
                        for($i=108;$i>102;$i--){
                            echo "<div class='owl-item'>";
                            echo getCard($i,$products[$i]);
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
            <div class="owl-dots"></div>
        </div>
    </section>
<?php require "footer.php"; ?>