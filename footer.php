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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="style/footer.css">
</head>

<body>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s7">
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
                <div class="col s5">
                    <a href="contactus.php" class="waves-effect waves-dark book-btn">BOOK NOW</a>
                    <div class="socmed">
                        <p>Email us: customer@logistikus.com</p><br />
                        <span id="fb"><img src="images/fb_socmed-icon.png"></span>
                        <span id="pinterest"><img src="images/pinterest_socmed-icon.png"></span>
                        </div>
                    </div>
                </div>
            </div>
    </footer>



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