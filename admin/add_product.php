<?php require "header.php"; ?>
        <main>
            <div class="title-box">
                <h1>add new product</h1>
            </div>
            <div class="flex-box" id="add-product">
                <form action="">
                    <div>
                        <label>product title</label><br>
                        <input type="text" placeholder="product title"><br><br>
                        <label>product category</label><br>
                        <select>
                            <option selected disabled>select category</option>
                            <option value="">furniture</option>
                            <option value="">women</option>
                            <option value="">men</option>
                        </select><br>
                        <label>product sub-category</label><br>
                        <select>
                            <option selected disabled>first select category</option>
                            <option value="">furniture</option>
                            <option value="">women</option>
                            <option value="">men</option>
                        </select><br>
                        <label>product brand</label><br>
                        <select>
                            <option selected disabled>first select sub-category</option>
                            <option value="">furniture</option>
                            <option value="">women</option>
                            <option value="">men</option>
                        </select>
                        <br><br>
                        <label>product description</label>
                        <textarea></textarea>
                    </div>
                    <div>
                        <label>featured image</label>
                        <input type="file"><br><br>
                        <label>product price</label>
                        <input type="number"><br><br>
                        <label>available quantity</label>
                        <input type="number"><br><br>
                        <label>status</label>
                        <select>
                            <option value="">publish</option>
                            <option value="">draft</option>
                        </select><br><br>
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </main>
    </section>
    <?php require "footer.php"; ?>