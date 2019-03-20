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
    <link type="text/css" rel="stylesheet" href="style/locations.css">
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
                <div class="col s6"><img src="images/map_locations.svg"></div>
                <div class="col s6"><h1>Coverage</h1>
                    <hr>
                    <span class="text">
                    <p>We serve our customers in Metro Manila, Imus, Cavite, Santa Rosa, Laguna, Pampanga, Naga, Cebu, Davao and Cagayan de Oro through our network of distribution centers and satellite outlets.</p>
                    <p>Watch out for us as we continue to cover more of Luzon, Visayas and Mindanao in the coming days!</p>
                    </span>
                    <hr>
                </div>
                <div class="col s3">
                    <h2>MANILA:</h2>
                    <p>(02) 515-8141 / (0923) 957-8550 / (0945) 830-2620<br />
                    331 Jennys Avenue, Pasig City<br />
                    20th Floor, Inoza Tower, 40th Street,<br />
                    Bonifacio Global City
                    </p>
                </div>
                <div class="col s3">
                    <h2>NAGA CITY, BICOL REGION:</h2>
                    <p>(0933) 829-4347<br />
                    Bldg 1 MPLAZA Roxas Avenue<br />
                    Concepcion Pequeña, Naga City
                    </p>
                </div>
                <div class="col s3">
                    <h2>IMUS CAVITE:</h2>
                    <p>(046) 541-9326<br />
                    Unit 10 KM, 22 Aguinaldo Highway<br />
                    corner Palanas St., Anabu 1A, Imus Cavite
                    </p>
                </div>
                <div class="col s3">
                    <h2>CEBU:</h2>
                    <p>(032) 236-172 / (0943) 232-1921 / (0927) 534-6966<br />
                    E-13, traders arcade, Hernan Cortes<br />
                    Mandaue City, Cebu
                    </p>
                </div>
                <div class="col s3">
                    <h2>STA. ROSA LAGUNA:</h2>
                    <p>(049) 302-2196<br />
                    Zircon Road corner Pearl road,
                    <br />
                    Sta Rosa Commercial Complex,<br />
                    Brgy. Balibago, Sta Rosa Laguna
                    </p>
                </div>
                <div class="col s3">
                    <h2>DAVAO:</h2>
                    <p>(082) 237-3500 / (0947) 557-8891 / (0966) 462-2094<br />
                    Ldl Comm. Bldg. Warehouse 4,<br />
                    Barrio Panacan, Diversion Road,<br />
                    Bunawan District, Davao City.
                    </p>
                </div>
                <div class="col s3">
                    <h2>PAMPANGA:</h2>
                    <p>(0915) 004-0207<br />
                    Eros 2 Lagundi, Mexico Pampanga
                    </p>
                </div>
                <div class="col s3">
                    <h2>CAGAYAN DE ORO:</h2>
                    <p>(088) 859-0676 / (0935) 502-9599<br />
                    3566 San Pedro St., Zone 6, Brgy. Bayabas,<br />
                    CDO City, Misamis Oriental
                    </p>
                </div>
                <div class="col s6 right"><hr>
                <div class="col s2" id="icon"><img src="images/icons/fb_loc.svg"><i>Logistikus Express</i></div>
                <div class="col s2"  id="icon"><img src="images/icons/pin_loc.svg"><i>logistikus_express</i></div>
                <div class="col s2"  id="icon"><img src="images/icons/email_loc.svg"><i>customer@logistikus.com</i></div>
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