<!DOCTYPE html>
<html>

<head>
    <title>Logistikus-Express</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,600i,700,700i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
                                    <form action="https://www.logistikus-express.com/trackandtrace/api.php"
                                        onsubmit="myFunction()">
                                        <input type="text1" class="track" placeholder="TRACKING #" name="search">
                                        <input type="submit" class="button1" placeholder="TRACKING #" name="urlDirect"
                                            value="Track">
                                    </form>
                                </div>
                            </div>
                        </div>
                </li>
            </ul>
        </div>
        <ul class="sidenav" id="menu-responsive">
            <img src="./images/logo.png">
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
            <div class="trackandtrace">
                <h3>TRACK YOUR PARCEL</h3>
                <div class="search1">
                    <form>
                        <input type="text0" class="track-trace" placeholder="TRACKING #" name="search" maxlength="20">
                        <input type="submit" class="button" value="Track">
                    </form>
                </div>
            </div>
            <h5>
                <p class="right-align">Pick-up | Track | Deliver</p>
            </h5>
            <h2><a class="waves-effect waves-dark btn-large right">BOOK NOW</a></h2>
            <br />

        </div>
        <div class="parallax responsive-img"><img src="images/header/header.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="baes">
                <img src="images/baes.png" class="img-responsive">
            </div>
            <div class="title">
                <h1>
                    <p><span id="blue">THE</span>
                        <span id="orange">SCOOTER</span>
                        <span id="blue2">BAES</span>
                    </p>
                </h1>
                <h6>
                    <p><i>ARE RIDING OUT!</i></p>
                </h6>
                <div id="text">
                    <p>Take a snapshot with our roving Logistikus Express Scooter Baes<br />
                        in Ayala CBD this February and win a prize!</p>
                </div>
                <div class="video">
                    <p>Watch the Scooter Baes when they rode out for the first time in BGC Taguig.</p>
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
        });
    </script>
</body>


</html>