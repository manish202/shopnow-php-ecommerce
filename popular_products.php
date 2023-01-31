<?php require "header.php"; ?>
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
<?php require "footer.php"; ?>