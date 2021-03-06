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
    <link type="text/css" rel="stylesheet" href="style/aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
<?php include 'nav.php';?>
    <div class="container">
    </div>

    <div class="parallax-container">

        <div class="parallax responsive-img"><img src="images/header/locations_header2.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <div class="col s6"><img src="images/aboutUs.jpg" class="about"></div>
                <div class="col s6">
                    <h1>Going the Extra Mile for the Last Mile</h1>
                    <div class="aboutext">
                        <span id="p">
                        <p>Logistikus Express specializes in last mile deliveries in the Philippines, banking on decades
                            of combined logistics experience, with a management team of industry experts and an army of
                            field movers who get the job done, and fulfill the expectations of its growing stable of
                            client-partners.</p> <br />
                            <p>PRESS RELEASES</p>
                            <p>NEWS UPDATES</p>
                        </span>
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