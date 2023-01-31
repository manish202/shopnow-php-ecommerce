<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="css_js/color.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">shopnow</a>
        </div>
        <div class="hi-admin">
            hi admin <i class="fa fa-caret-down" aria-hidden="true"></i>
            <div class="user-options">
                <a href="change-password.php">change password</a>
                <a href="#">logout</a>
            </div>
        </div>
    </header>
    <section class="dashboard">
        <aside>
            <ul>
                <li class="active"><a href="dashboard.php">dashboard</a></li>
                <li><a href="products.php">products</a></li>
                <li><a href="categories.php">categories</a></li>
                <li><a href="sub_categories.php">sub-categories</a></li>
                <li><a href="brands.php">brands</a></li>
                <li><a href="orders.php">orders</a></li>
                <li><a href="users.php">users</a></li>
            </ul>
        </aside>