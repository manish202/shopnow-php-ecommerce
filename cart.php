<?php require "header.php"; ?>
    <section class="products vh-100">
        <div class="title-box">
            <h2>my cart</h2>
        </div>
        <table class="wishlist-items cart-items">
            <tr>
                <th>product image</th>
                <th>product name</th>
                <th>product price</th>
                <th>qty.</th>
                <th>subtotal</th>
                <th>action</th>
            </tr>
            <tr>
                <td><img src="images/saree-5.jpg" alt=""></td>
                <td>Realme C3 (Volcano Grey, 32 GB) (3 GB RAM)</td>
                <td>RS. 8999</td>
                <td><input type="number" value="1" class="item-qty"></td>
                <td>RS. 759</td>
                <td><div class="action">&times;</div></td>
            </tr>
            <tr>
                <td><img src="images/saree-5.jpg" alt=""></td>
                <td>Realme C3 (Volcano Grey, 32 GB) (3 GB RAM)</td>
                <td>RS. 8999</td>
                <td><input type="number" value="1" class="item-qty"></td>
                <td>RS. 759</td>
                <td><div class="action">&times;</div></td>
            </tr>
            <tr>
                <td colspan="5">total amount(RS.)</td>
                <td colspan="1">1058</td>
            </tr>
        </table>
        <div class="proceed">
            <a href="">continue shopping</a>
            <a href="javascript:void(0)">proceed to checkout</a>
        </div>
    </section>
    <?php require "footer.php"; ?>