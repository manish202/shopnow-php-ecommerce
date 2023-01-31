<?php require "header.php"; ?>
    <section class="products vh-100">
        <div class="title-box">
            <h2>all products</h2>
        </div>
        <div class="search-result">
            <div class="search-items all-products">
                <?php
                    foreach($products as $key=>$val){
                        echo getCard($key,$val);
                    }
                ?>
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">next</a></li>
            </ul>
        </div>
    </section>
<?php require "footer.php"; ?>