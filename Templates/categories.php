<?php

$conn = mysqli_connect("localhost", "root", "", "diamonds");

?>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="static/new_home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>

    <meta charset="utf-8">

    <title>CATEGORIES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../static/home.css">
    <link rel="stylesheet" href="../static/cards.css">
    <script src="../static/store.js"></script>
    <link rel="stylesheet" href="..\static\nav.css">
    <link rel="stylesheet" href="..\static\footer.css" />


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
    <nav style="background-color: #fefbe7">
        <div class="wrapper">
            <div class="logo"><a href="#">CodingNepal</a></div>
            <input type="radio" name="slider" id="menu-btn" />
            <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li>
                    <a href="#" class="desktop-item">Mega Menu</a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item">Mega Menu</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img src="../images/ring.jpg" alt="">
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=1">On sale</a></li>
                                    <li><a href="./categories.php?cid=2">Moissanite Jewellery</a></li>
                                    <li><a href="./categories.php?cid=3">Ring Wrap</a></li>
                                    <li><a href="./categories.php?cid=4">Zodiac Jewellery</a></li>
                                    <li><a href="./categories.php?cid=5">Pearl Jewellery</a></li>
                                    <li><a href="./categories.php?cid=6">Morganite Jewellery</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=13">Natural Diamond</a></li>
                                    <li><a href="./categories.php?cid=7">Engagement Rings</a></li>
                                    <li><a href="./categories.php?cid=8">Wedding Rings</a></li>
                                    <li><a href="./categories.php?cid=14">Cocktail Jewellery</a></li>
                                    <li><a href="./categories.php?cid=15">Ametrine Jewellery</a></li>
                                    <li><a href="./categories.php?cid=10">Necklace</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=9">Earrings</a></li>
                                    <li><a href="./categories.php?cid=11">Bracelets</a></li>
                                    <li><a href="./categories.php?cid=12">Gold Chains</a></li>
                                    <li><a href="./categories.php?cid=16">Color Stones</a></li>
                                    <li><a href="./categories.php?cid=17">Loose Gemstones</a></li>
                                    <li><a href="./categories.php?cid=18">Green Emerald</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">Feedback</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars">
                </i></label>
        </div>
    </nav>
    <br>
    <br><br>

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
  <div class="footer-basic">
    <footer>
      <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
            class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a
          href="#"><i class="icon ion-social-facebook"></i></a></div>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Home</a></li>
        <li class="list-inline-item"><a href="#">Services</a></li>
        <li class="list-inline-item"><a href="#">About</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Company Name © 2018</p>
    </footer>
  </div>


  <!--end footer-->

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