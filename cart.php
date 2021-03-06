<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printd T-Shirt - L.V.N Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/32.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="https://mail.google.com/mail/u/0/#inbox" target="blank">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
            include 'connect.php';
            $sql = "select*from cart";
            $kq = $connect->query($sql);
            foreach ($kq as $key => $values) {
            ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-1.jpg">
                            <div>
                                <p><?php echo $values['cart_name'] ?></p>
                                <small>Price: <?php echo $values['cart_price'] ?></small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="<?php echo $values['cart_quantity']; ?>"></td>
                    <td><?php echo $values['cart_price'] * $values['cart_quantity']; ?></td>
                </tr>
            <?php } ?>
            <!-- <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr> -->
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>175.000$</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>25.00$</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>200.000$</td>
                </tr>
            </table>

        </div>


    </div>


    <!-- ------------footer----------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and
                        Benefits of Sports Accessible to the Many</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>
                            <a href="#" style="text-decoration: none" target="blank">Facebook</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none" target="blank">Twitter</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none" target="blank">Instagram</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none" target="blank">Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2020 - By QuocHuy</p>
        </div>
        <!-- ------------------- js for toggle menu-------------- -->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>

</body>

</html>