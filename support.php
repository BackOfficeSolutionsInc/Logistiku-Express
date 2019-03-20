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
    <link type="text/css" rel="stylesheet" href="style/support.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
<?php include 'nav.php';?>
    <div class="container">
    </div>

    <div class="parallax-container">

        <div class="parallax responsive-img"><img src="images/header/support_header2.jpg">
        </div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <div class="col s4"><img src="images/convenience.svg" class="pic">
                    <h1>Convenience</h1>
                        <div class="content">
                            <span id="p"><p>Logistikus Express guarantees next day delivery, cash-on-delivery and payment-upon-pickup for utmost convenience.</p></span>
                        </div>
                </div>
                <div class="col s4"><img src="images/care.svg" class="pic">
                <h1>Care</h1>
                    <div class="content">
                        <span id="p"><p>Logistikus Express makes sure your packages are picked up and delivered safely and on time with real-time tracking and customer support 7 days a week, including weekends and holidays.
                        </p></span>
                    </div>
                </div>
                <div class="col s4"><img src="images/efficiency.svg" class="pic">
                    <h1>Efficiency</h1>
                        <div class="content">
                            <span id="p"><p>We deploy our riders utilizing our efficient dispatching system - fulfilling the need for pickup and delivery by our customers.
                            </p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>


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