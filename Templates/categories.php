<?php

$conn = mysqli_connect("localhost", "root", "", "diamonds");

?>

<html>

<head>
    <meta charset="utf-8">

    <title>DIAMOND STORE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="../static/cards.css">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        // function favTutorial() {
        //     var mylist = document.getElementById("myList");
        //     document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
        // }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
        .card__image1 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .compact {
            margin-left: 40px;
            margin-right: 10px;

        }

        .column1 {
            float: left;
            width: 25%;
            padding: 10px 10px 10px 10px;
        }

        .row {
            margin: 50px -5px;
        }

        /* Clear floats after the columns */
        .row1:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column1 {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card1 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
            width: 300px;
            height: 400px;
        }

        .qt,
        .qt-plus,
        .qt-minus {
            display: block;
            float: left;
            border-top: 2px solid #333333;
            border-right: 2px solid #333333;
            border-left: 2px solid #333333;
            border-bottom: 2px solid #333333;
        }

        .qt {
            font-size: 19px;
            line-height: 30px;
            width: 50px;
            text-align: center;
            margin-top: 50px;
            background-color: #ffffe6;
            float: left;
        }

        .qt-plus,
        .qt-minus {
            border: none;
            font-size: 30px;
            font-weight: 500;
            height: 10%;
            width: 20px;
            float: left;
        }

        .qt-plus:hover,
        .qt-minus:hover {
            background: #ffffe6;
            color: pink;
            cursor: pointer;
            height: 34px;
        }

        .qt-plus {
            line-height: 30px;
            margin-top: 50px;
        }

        .qt-minus {
            line-height: 30px;
            margin-top: 50px;
        }

        .details-prod {
            line-height: 130px;
            margin-top: 50px;
            font-size: 15px;
            float: right;
            left: 90px;
        }

        .content {
            display: table-cell;
        }

        .description {
            width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #quant {
            margin: auto 10px;
            width: 30px;
            color: black;
            background-color: lightgrey;
        }

        #rm-itm {
            text-decoration: none;
        }
    </style>

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
                    <a class="menu-open" href="#">Menu</a>
                    <ul>
                        <li class="current"><a href="#">My Account</a></li>
                        <li><a id="dispa" href="#my-cart">My Cart</a></li>
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
                    <h1 id="site_logo"><a href="/" title=""><img src="http://html.diamond.itembridge.com/img/logo.png" alt="Online Store Theme Logo"></a></h1>
                    <h2 id="site_description">Online Store Theme</h2>
                </hgroup>
            </div><!-- .grid_3 -->

            <div class="grid_9">
                <div class="top_header">
                    <div class="welcome">
                        <h1><b>Welcome to the online Diamond Store </b>
                            <h1>
                    </div><!-- .welcome -->
                </div><!-- .top_header -->
            </div><!-- .grid_9 -->

            <div class="grid_9 primary-box">
                <nav class="primary">
                    <a class="menu-select" href="#">Catalog</a>
                    <ul>
                        <li style="background-color:#ffffe6">
                            <select id="myList" style="background-color:#ffffe6">
                                <option> Shop By Category </option>
                                <option> All </option>
                                <option> On Sale </option>
                                <option> Moissante Jewelry </option>
                                <option> Ring Wrap</option>
                                <option> Zodiac Jewelry </option>
                                <option> Pearl Jewelry </option>
                                <option> Morganite Jewelry</option>
                                <option> Natural Diamond Jewelry </option>
                            </select>
                        </li>
                        <li><a href="home.html">NEW ARRIVALS</a></li>
                        <li><a href="home.html">COLLECTION</a></li>
                    </ul>
                </nav><!-- .primary -->
            </div><!-- .grid_9 -->
        </div>
        <div class="clear"></div>
    </header>

    <hr>

    <?php

    if (isset($_GET['cid'])) {
        $cat_id = $_GET['cid'];
        // echo $id;
        if ($conn) {
            $query = "SELECT * FROM jewellery_info WHERE parent_cat = $cat_id";
            $res = mysqli_query($conn, $query);
            // echo $res;
        }
    ?>

        <!--cards-->
        <section class="container1 content-section">

            <div class="shop-items">
                <?php
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        $id = $row['id'];
                        $price = $row['price'];
                        $descr = $row['descr'];
                        $img = $row['img'];
                        $parent_cat = $row['parent_cat'];
                        $query2 = "SELECT * FROM category_table WHERE cat_id = '$parent_cat'";
                        $res2 = mysqli_query($conn, $query2);
                ?>
                        <div class="shop-item">
                            <form method="post" action="shop.php?action=add&id=<?php echo $id; ?>">
                                <span class="shop-item-title"><?php echo $id; ?></span>
                                <a href="products.php?id=<?php echo $id; ?>">
                                    <img class="shop-item-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>"></a><br><br>
                                <p style="text-align:center" class="description"><?php echo $descr; ?></p>

                                <?php
                                if ($res2) {
                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                        $par_cat = $row2['cat_name'];
                                ?>
                                        <p style="text-align:center"><strong>Category</strong> - <?php echo $par_cat; ?></p>
                                <?php
                                    }
                                }
                                ?>
                                <div class="shop-item-details">
                                    <span class="shop-item-price">Rs <?php echo $price; ?></span>
                                    <input type="number" name="quant" min="1" value="1" id="quant">
                                    <input type="hidden" name="hid_name" value="<?php echo $descr; ?>">
                                    <input type="hidden" name="hid_price" value="<?php echo $price; ?>">
                                    <input type="submit" name="submit" value="ADD TO CART" class="btn btn-primary shop-item-button" style="background-color:#45b0ba">
                                </div>
                        </div>
                        </form>
            <?php
                    }
                }
            }
            ?>

            </div>
        </section>
        <!--end cards-->
        <br><br>


        <!--cart display-->
        <!-- <section class="container content-section" id="my-cart">
            <h2 class="section-header">CART</h2>
        </section>
        <div class="container">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // if (!empty($_SESSION["shopping_cart"])) {
                    //     $total = 0;
                    //     foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
                            <tr>
                                <td><?php //echo $values['item_id']; 
                                    ?></td>
                                <td><?php //echo $values['item_name']; 
                                    ?></td>
                                <td>Rs <?php //echo $values['item_price']; 
                                        ?></td>
                                <td><?php //echo $values['item_quan']; 
                                    ?></td>
                                <td><?php //echo number_format($values["item_quan"] * $values["item_price"], 2) 
                                    ?></td>
                                <td><a href="shop.php?action=delete&id=<?php //echo $values["item_id"] 
                                                                        ?>" id="rm-itm"><span class="btn-sm btn-danger">Remove</span></a></td>
                            </tr>
                        <?php
                        //$total = $total + ($values["item_quan"] * $values["item_price"]);
                        //} 
                        ?>
                        <tr>
                            <td colspan="4">Total</td>
                            <td>Rs <?php //echo number_format($total, 2); 
                                    ?></td>
                            <td></td>
                        </tr>
                    <?php
                    //}
                    ?>
                </tbody>
            </table>
        </div> -->

        <!--end cart display-->

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

<!-- --------------------------------------------------------------------- -->

<?php

$conn = mysqli_connect("localhost", "root", "", "diamonds");

if (isset($_GET['cid'])) {
    $cat_id = $_GET['cid'];
    // echo $id;
    if ($conn) {
        $query = "SELECT * FROM jewellery_info WHERE parent_cat = $cat_id";
        $res = mysqli_query($conn, $query);
        // echo $res;
    }
}
?>