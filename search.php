<?php require "header.php"; ?>
    <section class="products vh-100">
        <div class="title-box">
            <h2>search results</h2>
        </div>
        <div class="search-result">
            <div class="related-category">
                <div class="cat-box">
                    <h2>related categories</h2>
                    <ul>
                        <li><a href="#">laptops</a></li>
                        <li><a href="#">camera</a></li>
                        <li><a href="#">speakers</a></li>
                        <li><a href="#">mobiles</a></li>
                    </ul>
                </div>
            </div>
            <div class="search-items">
                    <?php
                        for($i=100;$i<107;$i++){
                            echo getCard($i,$products[$i]);
                        }
                    ?>
            </div>
        </div>
    </section>
<?php require "footer.php"; ?>