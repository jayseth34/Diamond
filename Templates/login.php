<?php

$conn = mysqli_connect("localhost", "root", "", "diamonds");

if (isset($_POST['signup'])) {
    $showAlert = false;
    $showError = false;
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['psw'];
    $cpass = $_POST['psw-repeat'];
    $exists = false;

    $query3 = "SELECT * FROM users WHERE uemail = '$email'";
    $res3 = mysqli_query($conn, $query3);
    $num2 = mysqli_num_rows($res3);
    if ($num2 > 0) {
        $exists = true;
    }

    if (($pass == $cpass) && $exists == false) {
        $query = "INSERT INTO `users` (`uid`, `uname`, `uemail`, `upass`) VALUES (NULL, '$uname', '$email', '$pass')";
        $res = mysqli_query($conn, $query);
        if ($res) {
            $showAlert = true;
        }
    } else {
        $showError = "Passwords do not match";
    }
}

if (isset($_POST['login'])) {
    $useremail = $_POST['email'];
    $password = $_POST['psw'];
    $login = false;
    $query2 = "SELECT * FROM users WHERE uemail = '$useremail' AND upass = '$password'";
    $res2 = mysqli_query($conn, $query2);
    $num = mysqli_num_rows($res2);
    if ($num == 1) {
        // $login = true;
        header('Location: home.php');
        exit();
    }
}

?>

<html>

<head>
    <meta charset="utf-8" />

    <title>LOGIN</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width" />

    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="..\static\home.css" />
    <link rel="stylesheet" href="..\static\nav.css" />
    <link rel="stylesheet" href="..\static\footer.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />

    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
    <script>
        window.jQuery ||
            document.write('<script src="js/jquery-1.8.3.min.js"><\/script>');
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
        function favTutorial() {
            var mylist = document.getElementById("myList");
            document.getElementById("favourite").value =
                mylist.options[mylist.selectedIndex].text;
        }
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #7d4c6b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
            background-color: #220838;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            height: 60%;
            border-radius: 100%;
        }

        .container {
            padding: 40px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Full-width input fields */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type="text"]:focus,
        input[type="password"]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for all buttons */
        button {
            background-color: #851179;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: #ffffe6;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {

            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }

        @media only screen and (max-width: 800px) {

            /* For tablets: */
            .mained {
                width: 80%;
                padding: 0;
            }
        }

        @media only screen and (max-width: 700px) {

            /* For mobile phones: */
            .mained,
            modal-content {
                width: 100%;
            }
        }
    </style>
    <script>
        // Get the modal
        var modal = document.getElementById("id01");

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
</head>

<body style="background-color: #ffffe6">
    <?php
    echo $login;
    ?>
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
                    <a href="#" class="desktop-item">Dropdown Menu</a>
                    <input type="checkbox" id="showDrop" />
                    <label for="showDrop" class="mobile-item">Dropdown Menu</label>
                    <ul class="drop-menu">
                        <li><a href="#">Drop menu 1</a></li>
                        <li><a href="#">Drop menu 2</a></li>
                        <li><a href="#">Drop menu 3</a></li>
                        <li><a href="#">Drop menu 4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="desktop-item">Mega Menu</a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item">Mega Menu</label>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img src="../images/ring.jpg" alt="" />
                            </div>
                            <div class="row">
                                <header>Design Services</header>
                                <ul class="mega-links">
                                    <li><a href="#">Graphics</a></li>
                                    <li><a href="#">Vectors</a></li>
                                    <li><a href="#">Business cards</a></li>
                                    <li><a href="#">Custom logo</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Email Services</header>
                                <ul class="mega-links">
                                    <li><a href="#">Personal Email</a></li>
                                    <li><a href="#">Business Email</a></li>
                                    <li><a href="#">Mobile Email</a></li>
                                    <li><a href="#">Web Marketing</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <header>Security services</header>
                                <ul class="mega-links">
                                    <li><a href="#">Site Seal</a></li>
                                    <li><a href="#">VPS Hosting</a></li>
                                    <li><a href="#">Privacy Seal</a></li>
                                    <li><a href="#">Website design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">Feedback</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>
    <br />
    <br /><br /><br />
    <div class="container-lg">
        <div class="container">
            <div class="container">
                <form action="login.php" method="post">
                    <div class="container">
                        <label for="email"><b>Email ID</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required />

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required />

                        <button type="submit" name="login">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" />
                            Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color: #f1f1f1">
                        <button class="sign-up" onclick="document.getElementById('id01').style.display='block'" style="width: auto">
                            Sign Up
                        </button>
                        <span class="psw"><a href="#">Forgot password?</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="mained">
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <br /><br />
            <form class="modal-content" action="" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create your account.</p>
                    <hr />

                    <label for="uname"><b>Name</b></label>
                    <input type="text" placeholder="Enter your name" name="uname" required />

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required />

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required />

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required />

                    <p>
                        By creating an account you agree to our
                        <a href="#" style="color: dodgerblue">Terms & Privacy</a>.
                    </p>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                            Cancel
                        </button>
                        <button type="submit" class="signupbtn" name="signup">Sign Up</button>
                    </div>
                </div>
            </form>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="static/new_home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <ul class="selectBox-dropdown-menu selectBox-options" style="display: none">
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
    <ul class="selectBox-dropdown-menu selectBox-options" style="display: none">
        <li class="selectBox-selected"><a rel="Price">Price</a></li>
        <li><a rel="Rating">Rating</a></li>
        <li><a rel="Name">Name</a></li>
    </ul>
</body>

</html>