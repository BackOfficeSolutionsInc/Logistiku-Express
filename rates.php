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
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="rates.html">Rates</a></li>
                <li><a href="location.html">Locations</a></li>
                <li><a href="support.html">Customer Support</a></li>
                <li><a href="riders.html">Riders</a></li>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="rates.html">Rates</a></li>
            <li><a href="location.html">Locations</a></li>
            <li><a href="support.html">Customer Support</a></li>
            <li><a href="riders.html">Riders</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="careers.html">Careers</a></li>
            <li><a href="contactus.html">Contact us</a></li>
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
        <div class="parallax responsive-img"><img src="images/header/rates_header2.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
    <div class="section white">
        <div class="row container">
            <div class="row">
                <div class="col s12">
                    <h1>Rates available upon request</h1>
                    <p>Rate calculations will be based on the details you will provide.
                        <br />
                        The computed charges are estimates only.
                        <br />
                        Final charges will be re-computed based on actual details.
                    </p>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="col s2">
                            <select class="browser-default" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                                <option value="origin">Select Origin</option>
                                <option value="origin">Manila</option>
                                <option value="origin">Imus Cavite</option>
                                <option value="origin">Sta. Rosa Laguna</option>
                                <option value="origin">Pampanga</option>
                                <option value="origin">Naga City, Bicol Region</option>
                                <option value="origin">Cebu</option>
                                <option value="origin">Davao</option>
                                <option value="origin">Cagayan De Oro</option>
                            </select>





                        </div>
                        <div class="col s2">
                            <select id="ddl2" class="browser-default">
                                <option value="origin">Select Destination</option>
                            </select>
                        </div>
                        <div class="col s2" class="browser-default">
                            <select id="ddl3" class="browser-default">
                                <option value="package">Choose Packaging</option>
                            </select>
                        </div>
                        <div class="col s2">
                            <select id="ddl4" class="browser-default">
                                <option value="dimention">Dimention</option>
                            </select>
                        </div>
                        <div class="col s2">
                            <select id="ddl5" class="browser-default">
                                <option value="dimention">Weight</option>
                            </select>
                        </div>
                        <div class="col s2">
                            <select id="ddl6" class="browser-default">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <div class="container">
                <ul>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                    <li><a href="careers.html">CAREERS</a></li>
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
<script>
    function configureDropDownLists(ddl1, ddl2, ddl3) {
        var origin = ['Select Destination', 'Manila', 'Imus Cavite', 'Sta. Rosa Laguna', 'Pampanga', 'Naga City, Bicol Region', 'Cebu', 'Davao', 'Cagayan De Oro'];
        var package = ['Pouch - S', 'Pouch - M', 'Pouch - L', 'Box - S', 'Box - M', 'Box - L'];
        var names = ['John', 'David', 'Sarah'];

        switch (ddl1.value) {
            case 'origin':
                ddl2.options.length = 0;
                for (i = 0; i < origin.length; i++) {
                    createOption(ddl2, origin[i], origin[i]);
                }
                break;
            case 'package':
                ddl3.options.length = 0;
                for (i = 0; i < package.length; i++) {
                    createOption(ddl3, package[i], package[i]);
                }
                break;
            case 'Names':
                ddl2.options.length = 0;
                for (i = 0; i < names.length; i++) {
                    createOption(ddl2, names[i], names[i]);
                }
                break;
            default:
                ddl2.options.length = 0;
                break;
        }

    }

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>

</html>