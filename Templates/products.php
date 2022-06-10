<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "diamonds");

if (isset($_GET['id'])) {
    $jid = $_GET['id'];
    if ($conn) {
        $query = "SELECT * FROM jewellery_info WHERE id = $jid";
        $res = mysqli_query($conn, $query);
    }
}

if (isset($_POST['submit'])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET['id'],
                'item_name' => $_POST['hid_name'],
                'item_price' => $_POST['hid_price'],
                'item_quan' => $_POST['quant']
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item already added")</script>';
            echo '<script>window.location = "shop.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET['id'],
            'item_name' => $_POST['hid_name'],
            'item_price' => $_POST['hid_price'],
            'item_quan' => $_POST['quant']
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

// if (isset($_GET["action"])) {
//     if ($_GET["action"] == "delete") {
//         foreach ($_SESSION["shopping_cart"] as $keys => $values) {
//             if ($values["item_id"] == $_GET["id"]) {
//                 unset($_SESSION["shopping_cart"][$keys]);
//                 echo '<script>alert("Item removed")</script>';
//                 echo '<script>window.location = "shop.php"</script>';
//             }
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAILS</title>
    <link rel="stylesheet" href="../static/style.css">
    <link rel="stylesheet" href="..\static\footer.css" />
    <link rel="stylesheet" href="..\static\proddetails.css">
    <link rel="stylesheet" href="..\static\nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>
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
                                    <li><a href="./categories.php?cid=1">On sale</a></li><hr>
                                    <li><a href="./categories.php?cid=2">Moissanite Jewellery</a></li><hr>
                                    <li><a href="./categories.php?cid=3">Ring Wrap</a></li><hr>
                                    <li><a href="./categories.php?cid=4">Zodiac Jewellery</a></li><hr>
                                    <li><a href="./categories.php?cid=5">Pearl Jewellery</a></li><hr>
                                    <li><a href="./categories.php?cid=6">Morganite Jewellery</a></li><hr>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=13">Natural Diamond</a></li><hr>
                                    <li><a href="./categories.php?cid=7">Engagement Rings</a></li><hr>
                                    <li><a href="./categories.php?cid=8">Wedding Rings</a></li><hr>
                                    <li><a href="./categories.php?cid=14">Cocktail Jewellery</a></li><hr>
                                    <li><a href="./categories.php?cid=15">Ametrine Jewellery</a></li><hr>
                                    <li><a href="./categories.php?cid=10">Necklace</a></li><hr>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=9">Earrings</a></li><hr>
                                    <li><a href="./categories.php?cid=11">Bracelets</a></li><hr>
                                    <li><a href="./categories.php?cid=12">Gold Chains</a></li><hr>
                                    <li><a href="./categories.php?cid=16">Color Stones</a></li><hr>
                                    <li><a href="./categories.php?cid=17">Loose Gemstones</a></li><hr>
                                    <li><a href="./categories.php?cid=18">Green Emerald</a></li><hr>
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
    <br />
    <br /><br /><br />

    <div class="main-wrapper">
        <?php
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $descr = $row['descr'];
                $price = $row['price'];
                $display_img = $row['img'];
                $parent_cat = $row['parent_cat'];
                $query2 = "SELECT * FROM category_table WHERE cat_id = '$parent_cat'";
                $res2 = mysqli_query($conn, $query2);
        ?>
                <div class="container">
                    <div class="product-div">
                        <div class="product-div-left">
                            <div class="img-container">
                                <!-- <img src="../images/ring.jpg" alt="watch"> -->
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($display_img) . '"/>'; ?>
                            </div>
                            <div class="hover-container">
                                <?php
                                $query3 = "SELECT * FROM images WHERE prod_id = $id";
                                $res3 = mysqli_query($conn, $query3);
                                if ($res3) {
                                    while ($row3 = mysqli_fetch_assoc($res3)) {
                                        $img1 = $row3['img1'];
                                        $img2 = $row3['img2'];
                                        $img3 = $row3['img3'];
                                        $img4 = $row3['img4'];
                                        $img5 = $row3['img5'];
                                        $img6 = $row3['img6'];
                                        $img7 = $row3['img7'];
                                        $img8 = $row3['img8'];
                                        $img9 = $row3['img9'];
                                        $img10 = $row3['img10'];

                                        if ($img1 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img1) . '"/></div>';
                                        }
                                        if ($img2 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img2) . '"/></div>';
                                        }
                                        if ($img3 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img3) . '"/></div>';
                                        }
                                        if ($img4 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img4) . '"/></div>';
                                        }
                                        if ($img5 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img5) . '"/></div>';
                                        }
                                        if ($img6 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img6) . '"/></div>';
                                        }
                                        if ($img7 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img7) . '"/></div>';
                                        }
                                        if ($img8 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img8) . '"/></div>';
                                        }
                                        if ($img9 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img9) . '"/></div>';
                                        }
                                        if ($img10 != "NA") {
                                            echo '<div><img src="data:image/jpeg;base64,' . base64_encode($img10) . '"/></div>';
                                        }


                                        // <div><img src="../images/diamond.jpg"></div>


                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="product-div-right">
                            <span class="product-name">(New) Analog Watch - For Men</span>
                            <?php
                            if ($res2) {
                                while ($row2 = mysqli_fetch_assoc($res2)) {
                                    $par_cat = $row2['cat_name'];
                            ?>
                                    <span class="product-price">Category - <?php echo $par_cat; ?></span>
                            <?php
                                }
                            }
                            ?>
                            <span class="product-price">Rs. <?php echo $price; ?></span>
                            <div class="product-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star-half-alt"></i></span>
                                <span>(350 ratings)</span>
                            </div>
                            <p class="product-description"><?php echo $descr; ?></p>
                            <form method="post" action="products.php?action=add&id=<?php echo $id; ?>">
                                <div class="btn-groups">
                                    <input type="hidden" name="hid_name" value="<?php echo $descr; ?>">
                                    <input type="hidden" name="hid_price" value="<?php echo $price; ?>">
                                    <input type="number" name="quant" id="quan" min="1" value="1">
                                    <input type="submit" class="add-cart-btn" name="submit"><i class="fas fa-shopping-cart"></i>add to cart
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>

<?php
            }
        }
?>

<hr>
<center>
    <h2>REVIEWS</h2>
</center>



<!--testimonials-box-container-->
<div class="testimonial-box-container">
    <!--BOX-1-->
    <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
            <!--profile-->
            <div class="profile">
                <!--img-->
                <div class="profile-img">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" />
                </div>
                <!--name-and-username-->
                <div class="name-user">
                    <strong>Touseeq Ijaz</strong>
                    <span>@touseeqijazweb</span>
                </div>
            </div>
            <!--reviews-->
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <!--Empty star-->
            </div>
        </div>
        <!--Comments-->
        <div class="client-comment">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
        </div>
    </div>
    <!--BOX-2-->
    <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
            <!--profile-->
            <div class="profile">
                <!--img-->
                <div class="profile-img">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" />
                </div>
                <!--name-and-username-->
                <div class="name-user">
                    <strong>J.K Rowling</strong>
                    <span>@jkrowling</span>
                </div>
            </div>
            <!--reviews-->
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <!--Empty star-->
            </div>
        </div>
        <!--Comments-->
        <div class="client-comment">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
        </div>
    </div>
    <!--BOX-3-->
    <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
            <!--profile-->
            <div class="profile">
                <!--img-->
                <div class="profile-img">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" />
                </div>
                <!--name-and-username-->
                <div class="name-user">
                    <strong>Harry Potter</strong>
                    <span>@DanielRedclief</span>
                </div>
            </div>
            <!--reviews-->
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <!--Empty star-->
            </div>
        </div>
        <!--Comments-->
        <div class="client-comment">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
        </div>
    </div>
    <!--BOX-4-->
    <div class="testimonial-box">
        <!--top-->
        <div class="box-top">
            <!--profile-->
            <div class="profile">
                <!--img-->
                <div class="profile-img">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" />
                </div>
                <!--name-and-username-->
                <div class="name-user">
                    <strong>Oliva</strong>
                    <span>@Olivaadward</span>
                </div>
            </div>
            <!--reviews-->
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <!--Empty star-->
            </div>
        </div>
        <!--Comments-->
        <div class="client-comment">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
        </div>
    </div>
</div>


<!--footer-->
<div class="footer-basic">
    <footer>
        <div class="social">
            <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
        </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<script src="../static/script.js"></script>
</body>

</html>