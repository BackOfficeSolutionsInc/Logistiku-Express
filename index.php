<!DOCTYPE html>
<html>

<head>
    <title>Logistikus-Express</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,600i,700,700i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800,800i,900,900i" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="style/main.css">
</head>

<body>
<?php include 'nav.php';?>
    <div class="container">
    </div>

    <div class="parallax-container">
        <div class="container">
            <div class="trackandtrace">
                <h3>TRACK YOUR PARCEL</h3>
                <div class="search1">
                    <form action="https://track.logistikus-express.com/" onsubmit="myFunction()">
                        <input type="text0" class="track-trace" placeholder="TRACKING #" name="search" maxlength="20"  autocomplete="off" />
                        <input type="submit" class="button" name="urlDirect" value="Track">
                    </form>
                </div>
            </div>
            <h5>
                <p class="right-align">Pick-up | Track | Deliver</p>
            </h5>
            <h2><a href="contactus.php" class="waves-effect waves-dark btn-large right">BOOK NOW</a></h2>
            <br />

        </div>
        <div class="parallax responsive-img"><img src="images/header/header.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="row">
            <div class="col s5 left"><div class="baes"><img src="images/baes.png" class="img-responsive"></div></div>
            <div class="col s7 right">
                <h1>
                    <p> <span id="blue">THE</span>
                        <span id="orange">SCOOTER</span>
                        <span id="blue2">BAES</span></span>            
                </h1>
                    <h6>
                        <p><i>ARE RIDING OUT!</i></p>
                    </h6>
                    <div id="text"><p>Take a snapshot with our roving Logistikus Express Scooter Baes<br />
                                    in Ayala CBD this February and win a prize!</p>
                                    </div>
                <div class="video">
                    <p>Watch the Scooter Baes when they rode out for the first time in BGC Taguig.</p>
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