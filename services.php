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
    <link type="text/css" rel="stylesheet" href="style/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
<?php include 'nav.php';?>
    <div class="container">
    </div>

    <div class="parallax-container">

        <div class="parallax responsive-img"><img src="images/header/services_header2.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="row">
            <div class="col s4 d2d">
                    <img src="images/icons/door2door.svg"><br /><span class="flow-text">Door-to-Door</span>
            </div>
            <div class="col s4 d2d" style="margin-top: 90px;">
                    <img src="images/icons/nextdaydel.svg"><br /><span class="flow-text">Next Day Delivery</span>
            </div>
            <div class="col s4 d2d">
                    <img src="images/icons/cod.svg"><br /><span class="flow-text">Cash-on-Delivery</span>
            </div>
        </div>
        <div class="row">
            <div class="col s4 d2d">
                    <img src="images/icons/wahdel.svg"><br /><span class="flow-text">Weekend and <br />Holiday
                        Delivery</span>
            </div>
            <div class="col s4 d2d">
                    <img src="images/icons/realtrack.svg"><br /><span class="flow-text">Real-Time Tracking</span>
            </div>
            <div class="col s4 d2d">
                    <img src="images/icons/pup.svg"><br /><span class="flow-text">Payment-upon-Pickup</span>
            </div>
        </div>
        </div>
    </div>
    <?php include 'footer.php';?>
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