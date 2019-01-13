<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment-2</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="css/contact-us.css">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <ul>
            <li><a  href=index.php>Home </a></li>
            <li><a  href="About-us.php">About</a></li>
            <li><a  href="login.php">Login</a></li>
            <li><a  href="forget-password.php">Forget Password</a></li>
            <li><a  href="register.php">Register</a></li>
            <li><a  href="Contact-us.php">Contact </a></li>
        </ul>
        <div class="search"><i class="fas fa-search"></i></div>
    </div>
</div>



<div class="container">
    <h3 class="c"><strong>Contact Us</strong></h3>
</div>


<div>
    <form class="contact-us-form">
        <div class="container-contact col-sm-12">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" required placeholder="Your Name">

            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="Email" required placeholder="Email@Example.com">
            </div>

            <div class="form-group">
                <i class="fas fa-comments"></i>
                <label for="Message">Message</label>
                <textarea class="form-control" rows="6" id="Message" placeholder="Write Your Query"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
        </div>
    </form>
</div>

<br>

<footer class="page-footer font-small teal pt-lg-5">

    <div class="container text-center text-md-left">


        <div class="row">


            <div class="col-md-3 mx-auto">


                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Products</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Men</a>
                    </li>
                    <li>
                        <a href="#!">Women</a>
                    </li>
                    <li>
                        <a href="#!">Child</a>
                    </li>
                    <li>
                        <a href="#!">Other Accessories</a>
                    </li>
                </ul>

            </div>


            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="login.php">Your Account</a>
                    </li>

                    <li>
                        <a href="register.php">Want To Register</a>
                    </li>

                    <li>
                        <a href="index.php">Main Page</a>
                    </li>
                    <li>
                        <a href="About-us.php">About Us</a>
                    </li>
                </ul>

            </div>

            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">For Contact</h5>

                <ul class="list-unstyled">

                    <p>
                    <li class="fa fa-map-marker-alt mr-3"></li> Lahore </p>

                    <li class="fa fa-envelope mr-3">
                        <a  href="http://www.gmail.com">info@example.com</a>
                    </li>
                    <p>
                    <li class="fa fa-phone mr-3"></li>+923039666366</p>

                    <p>
                    <li class="fa fa-print mr-3"></li>+92234438924</p>

                </ul>

            </div>


            <hr class="clearfix w-100 d-md-none">


            <div class="col-md-3 mx-auto">

                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

                <div>
                    <a href="http://www.facebook.com"><i class="fab fa-facebook-square icon_color1 "></i></a>
                    <a href="http://www.instagram.com"><i class="fab fa-instagram icon_color2"></i></a>
                    <a href="http://www.twitter.com"><i class="fab fa-twitter-square icon_color3"></i></a>
                    <a href="http://www.snapchat.com"><i class="fab fa-snapchat-square icon_color4"></i></a>
                    <a href="http://www.gmail.com"><i class="fab fa-google-plus-square icon_color5"></i></a>
                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 pt-4">

                <label for="Search"></label>
                <input class="SearchBar" size="20" type="text" id="search" placeholder="Search" aria-label="Search">
                <div>
                    <button class="btn btn-outline-secondary" type="button">Search</button>
                </div>

            </div>

            <div class="col-md-6 pt-4">
                <label for="sign up"></label>
                <input type="text" size="20" class="SearchBar" id="sign up" required placeholder="Your Email">
                <div>
                    <button class="btn btn-outline-secondary" type="button">Sign up</button>
                </div>

            </div>

        </div>

    </div>
    <br>
    <br>
</footer>
</body>
</html>