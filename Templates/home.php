<html>

<head>
    <meta charset="utf-8">

    <title>DIAMOND STORE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="..\static\home.css">
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
    <script>
        // function favTutorial() {
        //     var mylist = document.getElementById("myList");
        //     document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
        // }
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav style="background-color:#FEFBE7">
        <div class="wrapper">
            <div class="logo"><img src="../images/wom_jewels1.jpeg" style="width:175px;height:70px"></img></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <!-- <li>
                    <a href="#" class="desktop-item">Dropdown Menu</a>
                    <input type="checkbox" id="showDrop">
                    <label for="showDrop" class="mobile-item">Dropdown Menu</label>
                    <ul class="drop-menu">
                        <li><a href="#">Drop menu 1</a></li>
                        <li><a href="#">Drop menu 2</a></li>
                        <li><a href="#">Drop menu 3</a></li>
                        <li><a href="#">Drop menu 4</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="#" class="desktop-item">Mega Menu</a>
                    <input type="checkbox" id="showMega">
                    <label for="showMega" class="mobile-item">Mega Menu</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img src="../images/ring.jpg" alt="">
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=1"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">On sale</a></li>
                                    <li><a href="./categories.php?cid=2"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Moissanite Jewellery</a></li>
                                    <li><a href="./categories.php?cid=3"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Ring Wrap</a></li>
                                    <li><a href="./categories.php?cid=4"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Zodiac Jewellery</a></li>
                                    <li><a href="./categories.php?cid=5"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Pearl Jewellery</a></li>
                                    <li><a href="./categories.php?cid=6"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Morganite Jewellery</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=13"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Natural Diamond</a></li>
                                    <li><a href="./categories.php?cid=7"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Engagement Rings</a></li>
                                    <li><a href="./categories.php?cid=8"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Wedding Rings</a></li>
                                    <li><a href="./categories.php?cid=14"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Cocktail Jewellery</a></li>
                                    <li><a href="./categories.php?cid=15"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Ametrine Jewellery</a></li>
                                    <li><a href="./categories.php?cid=10"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Necklace</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="mega-links">
                                    <li><a href="./categories.php?cid=9"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Earrings</a></li>
                                    <li><a href="./categories.php?cid=11"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Bracelets</a></li>
                                    <li><a href="./categories.php?cid=12"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Gold Chains</a></li>
                                    <li><a href="./categories.php?cid=16"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Color Stones</a></li>
                                    <li><a href="./categories.php?cid=17"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Loose Gemstones</a></li>
                                    <li><a href="./categories.php?cid=18"><img src="../images/ring_resized.jpg" style="width:43px; height:35px; border-radius: 50%; margin-right: 5px;">Green Emerald</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">Feedback</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn">
                <i class="fas fa-bars">
                </i>
            </label>
        </div>
    </nav>
    <br>

    <hr>

    <!--carousel-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../images/diamond.jpg" alt="Los Angeles" style="width:100%; height:700px;">
            </div>

            <div class="item">
                <img src="../images/ring.jpg" alt="Chicago" style="width:100%; height:700px;">
            </div>

            <div class="item">
                <img src="../images/ring2.jpg" alt="New york" style="width:100%; height:700px;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="width:8%">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="width:8%">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--end carousel-->

    <!--arrivals-->
    <div class="w3-row w3-padding w3-border" id="arrivals">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">

            <!-- Blog entry -->
            <div class="w3-container w3-white w3-margin w3-padding-large">
                <div class="w3-center">
                    <h3>NEW ARRIVALS</h3>
                    <h5>Check out the latest collection, <span class="w3-opacity">APRIL 26, 2022</span></h5>
                </div>

                <div class="w3-justify">
                    <img src="../images/ring3.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
                </div>
            </div>
            <hr>




            <!-- END BLOG ENTRIES -->
        </div>

        <!-- About/Information menu -->
        <div class="w3-col l4">
            <!-- About Card -->
            <div class="w3-white w3-margin">
                <img src="../images/ring2.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
                <div class="w3-container w3-light-gray">
                    <h4>RINGS</h4>
                    <p>Just me, myself and I, exploring the diamond store</p>
                </div>
            </div>
            <hr>

            <!-- Posts -->
            <div class="w3-white w3-margin">
                <div class="w3-container w3-padding w3-light-gray">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Denim</span>
                        <br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Sweaters</span>
                        <br>
                        <span>Praes tinci sed</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Workshop</span>
                        <br>
                        <span>Ultricies congue</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
                        <span class="w3-large">Trends</span>
                        <br>
                        <span>Lorem ipsum dipsum</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
                        <span class="w3-large">Trends</span>
                        <br>
                        <span>Lorem ipsum dipsum</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
                        <span class="w3-large">Trends</span>
                        <br>
                        <span>Lorem ipsum dipsum</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="../images/diamond.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
                        <span class="w3-large">Trends</span>
                        <br>
                        <span>Lorem ipsum dipsum</span>
                    </li>
                </ul>
            </div>
            <hr>

        </div>

        <!-- END GRID -->
    </div>
    <!--end arrivals-->

    <!--testimonials-->
    <br>
    <br>
    <div class="container mt-5 mb-5">

        <div class="row g-2">
            <div class="col-md-4">
                <div class="card1 p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQc8jiE4qs8jObjUARb0TpF9aeNFaBbtW51DQ&usqp=CAU" class="rounded-circle" style="width:100;border-radius: 50%;">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Jay Seth</h5>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card1 p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" style="width:100;border-radius: 50%;">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Mark Smith</h5>
                        <span>Web Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card1 p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" style="width:100;border-radius: 50%;">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Veera Duncan</h5>
                        <span>Software Architect</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>


        </div>

    </div>
    <!--end testimonials-->
    <br>
    <br>
    <hr>

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