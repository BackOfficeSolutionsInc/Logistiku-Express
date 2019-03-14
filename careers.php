<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="style/careers.css">

</head>

<body>

    <nav class="nav-wrapper">
        <div class="container">
            <a href="#" class="brand-logo"><img src="./images/logo.png"></a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="rates.php">Rates</a></li>
                <li><a href="location.php">Locations</a></li>
                <li><a href="support.php">Customer Support</a></li>
                <li><a href="riders.php">Riders</a></li>
                <li>
                    <div class="center row">
                        <div class="col s12">
                            <div class="row">
                                <h3>TRACK YOUR PARCEL</h3>
                                <div class="search">
                                    <form>
                                        <input type="text1" class="track" placeholder="TRACKING #" name="search">
                                        <input type="submit" class="button1" value="Track">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="sidenav" id="menu-responsive">
            <a href="#" class="side-logo"><img src="./images/logo.png"></a>
            <hr>
            <div class="center row">
            </div>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="rates.php">Rates</a></li>
            <li><a href="location.php">Locations</a></li>
            <li><a href="support.php">Customer Support</a></li>
            <li><a href="riders.php">Riders</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="careers.php">Careers</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <hr>
            <div class="socmed-side">
                <p>Email us: customer@logistikus.com</p>
                <div class="socmed-icons">
                    <span id="fb-side"><img src="images/fb_socmed-icon.png"></span>
                    <span id="pinterest-side"><img src="images/pinterest_socmed-icon.png"></span>
                </div>
            </div>

        </ul>
    </nav>
    <div class="parallax-container">
        <div class="container">
        </div>
        <div class="parallax responsive-img"><img src="images/header/careers_header2.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="row">
                <div class="row">
                    <div class="col s12">
                        <h1>Join Team Unstoppable<br />and grow with us!</h1>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col s4">
                            <input id="last_name" type="text" class="careers" placeholder="KEYWORD">
                        </div>
                        <div class="col s4">
                            <select class="select-dropdown dropdown-trigger" type="select">
                                <option value="" disabled selected>DEPARTMENT</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col s4">
                            <select class="select-dropdown dropdown-trigger" type="select">
                                <option value="" disabled selected>LOCATION</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <div class="container">
                <ul>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                    <li><a href="careers.php">CAREERS</a></li>
                    <li><a href="#!">PRIVACY POLICY</a></li>
                    <li><a href="#!">TERMS & CONDITIONS</a></li>
                </ul>
                <div class="apps">
                    <p>DOWNLOAD OUR APP!</p><br />
                    <span id="google"><img src="images/google-playstore.png"></span><span id="apple"><img
                            src="images/apple-appstore.png"></span>
                </div>
            </div>

            <div class="right-footer">

                <a class="waves-effect waves-dark book-btn">BOOK NOW</a>
                <div class="socmed">
                    <p>Email us: customer@logistikus.com</p><br />
                    <span id="fb"><img src="images/fb_socmed-icon.png"></span>
                    <span id="pinterest"><img src="images/pinterest_socmed-icon.png"></span>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems);
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>