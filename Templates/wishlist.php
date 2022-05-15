<html>

<head>
    <meta charset="utf-8">

    <title>DIAMOND STORE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../static/home.css">
    <script src="../static/store.js"></script>


    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')
    </script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/html5.js"></script>
    <script src="js/main.js"></script>
    <script src="js/radio.js"></script>
    <script src="js/checkbox.js"></script>
    <script src="js/selectBox.js"></script>
    <script src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.jqzoom-core.js"></script>
    <script src="js/jquery.transit.js"></script>
    <script src="js/jquery.easing.1.2.js"></script>
    <script src="js/jquery.anythingslider.js"></script>
    <script src="js/jquery.anythingslider.fx.js"></script>
    <link rel="stylesheet" href="../static/new_shop.css" />
    <script src="../static/store.js" async></script>
    <script>
        function favTutorial() {
            var mylist = document.getElementById("myList");
            document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
        }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#ffffe6">
    <div id="top">
        <div class="container_12">
            <div class="grid_3">
                <div class="lang">
                </div><!-- .lang -->

                <div class="currency">
                </div><!-- .currency -->
            </div><!-- .grid_3 -->

            <div class="grid_12">
                <nav>
                    <!-- <a class="menu-open" href="#">Menu</a> -->
                    <ul>
                        <li class="current"><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="/login.html">Log In</a></li>
                        <li><a href="/login.html">Sign Up</a></li>
                    </ul>
                </nav>
            </div><!-- .grid_9 -->
        </div>
    </div><!-- #top -->

    <header id="branding">
        <div class="container_12">
            <div class="grid_3">
                <hgroup>
                    <h1 id="site_logo"><a href="/" title=""><img src="../images/wom_jewels1.jpeg" style="height:100px;width:200px" alt="Online Store Theme Logo"></a></h1>
                    <h2 id="site_description"></h2>
                </hgroup>
            </div><!-- .grid_3 -->

            <div class="grid_9">
                <div class="top_header">
                    <!-- <div class="welcome">
                        <h1><b>Welcome to the online Diamond Store </b><h1>
                    </div> -->
                </div><!-- .top_header -->
            </div><!-- .grid_9 -->

            <div class="grid_9 primary-box">
                <nav class="primary">
                    <a class="menu-select" href="#">Catalog</a>
                    <ul>
                        <li style="background-color:#ffffe6">
                            <select id="myList" onchange="favTutorial()" style="background-color:#ffffe6">
                                <option> Shop By Category </option>
                                <option> All </option>
                                <option> On Sale </option>
                                <option> Moissante Jewelry </option>
                                <option> Ring Wrap</option>
                                <option> Zodiac Jewelry </option>
                                <option> Pearl Jewelry </option>
                                <option> Morganite Jewelry</option>
                            </select>
                        </li>
                        <li><a href="#arrivals">NEW ARRIVALS</a></li>
                        <li><a href="shop.html">COLLECTION</a></li>
                    </ul>
                </nav><!-- .primary -->
            </div><!-- .grid_9 -->
        </div>
        <div class="clear"></div>
    </header>

    <hr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "diamonds");
    if ($conn) {
        $query = "SELECT * FROM cart WHERE userid = 3";
        $total = 0;
        $price = 0;
        $descr = "";
        $res = mysqli_query($conn, $query);
    ?>

        <!--cart details -->
        <div>
            <section class="container content-section">
                <h2 class="section-header">CART</h2>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <?php
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $cid = $row['cid'];
                        $item_id = $row['item_id'];
                        $quantity = $row['quantity'];
                        $query2 = "SELECT * FROM jewellery_info WHERE id = $item_id";
                        $res2 = mysqli_query($conn, $query2);
                        if ($res2) {
                            while ($row2 = mysqli_fetch_assoc($res2)) {
                                $price = $row2['price'];
                                $descr = $row2['descr'];
                            }
                        }
                        $total = $total + $quantity * $price;

                ?>
                        <form action="wishlist.php" method="post">
                            <div class="cart-items">
                                <input type="number" name="quan" id="" min="0" value="1">
                                <span><?php echo $cid; ?></span>
                                <input type="hidden" name="cart_id" value="<?php echo $cid; ?>">
                                <span><?php echo $item_id; ?></span>
                                <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                                <!-- <span><?php //echo $quantity; 
                                            ?></span> -->
                            </div>
                            <?php }
                }
                
                ?>
                <input type="button" value="NEXT" name="sub">
            </form>


                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">$ <?php echo number_format($total, 2); ?></span>
                <?php } ?>
                </div>
                <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
            </section>
        </div>
        <br><br>
        <!--end cart details-->


        <!--footer-->
        <footer>
            <div class="footer_navigation">
                <div class="container_12">
                    <div class="grid_3">
                        <h3>Contact Us</h3>
                        <ul class="f_contact">
                            <li>49 Archdale, 2B Charlestone</li>
                            <li>+777 (100) 1234</li>
                            <li>mail@example.com</li>
                        </ul><!-- .f_contact -->
                    </div><!-- .grid_3 -->

                    <div class="grid_3">
                        <h3>Information</h3>
                        <nav class="f_menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Secure payment</a></li>
                            </ul>
                        </nav><!-- .private -->
                    </div><!-- .grid_3 -->

                    <div class="grid_3">
                        <h3>Customer Service</h3>
                        <nav class="f_menu">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Return</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </nav><!-- .private -->
                    </div><!-- .grid_3 -->

                    <div class="grid_3">
                        <h3>My Account</h3>
                        <nav class="f_menu">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </nav><!-- .private -->
                    </div><!-- .grid_3 -->
                </div><!-- .container_12 -->
                <div class="clear"></div>
                <div class="newsletter-payments">
                    <div class="container_12">
                        <div class="grid_12">
                            <div class="bg-newsletter-payments">
                                <div class="newsletter">
                                    <div class="newsletter-text">
                                        <div class="icon-mail">Newsletter</div>
                                        Subscribe to notifications about discounts from our store
                                    </div>
                                    <form>
                                        <input type="submit" value="">
                                        <input type="email" name="newsletter" value="" placeholder="Enter your email address...">
                                    </form>
                                </div><!-- .newsletter -->

                                <div class="payments">
                                    <img src="http://html.diamond.itembridge.com/img/payments.png" alt="Payments">
                                </div><!-- .payments -->
                            </div><!-- .bg-newsletter-payments -->
                        </div>
                        <div class="clear"></div>
                    </div><!-- .container_12 -->
                </div><!-- .newsletter-payments -->
                <div class="clear"></div>
            </div><!-- .footer_navigation -->

            <div class="footer_info">
                <div class="container_12">
                    <div class="grid_6">
                        <p class="copyright">© Diamond Store Theme, 2022</p>
                    </div><!-- .grid_6 -->

                    <div class="grid_6">
                        <div class="soc">
                            <a class="google" href="#"></a>
                            <a class="twitter" href="#"></a>
                            <a class="facebook" href="#"></a>
                        </div><!-- .soc -->
                    </div><!-- .grid_6 -->

                    <div class="clear"></div>
                </div><!-- .container_12 -->
            </div><!-- .footer_info -->
        </footer>
        <!--end footer-->

        <ul class="selectBox-dropdown-menu selectBox-options" style="display: none;">
            <li class="selectBox-selected"><a rel="1">1</a></li>
            <li><a rel="2">2</a></li>
            <li><a rel="3">3</a></li>
            <li><a rel="4">4</a></li>
            <li><a rel="5">5</a></li>
            <li><a rel="6">6</a></li>
            <li><a rel="7">7</a></li>
            <li><a rel="8">8</a></li>
            <li><a rel="9">9</a></li>
            <li><a rel="10">10</a></li>
            <li><a rel="11">11</a></li>
            <li><a rel="12">12</a></li>
        </ul>
        <ul class="selectBox-dropdown-menu selectBox-options" style="display: none;">
            <li class="selectBox-selected"><a rel="Price">Price</a></li>
            <li><a rel="Rating">Rating</a></li>
            <li><a rel="Name">Name</a></li>
        </ul>
</body>

</html>