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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
                            <select class="browser-default" id="origin" onchange="configureDropDownLists()">
                                <option >Select Origin</option>
                                <option >Manila</option>
                                <option >Imus Cavite</option>
                                <option >Sta. Rosa Laguna</option>
                                <option >Pampanga</option>
                                <option >Naga City, Bicol Region</option>
                                <option >Cebu</option>
                                <option >Davao</option>
                                <option >Cagayan De Oro</option>
                            </select>





                        </div>
                        <div class="col s2" >
                            <select id="destination" class="browser-default" onchange="destinationDropDownLists()">
                                <option >Select Destination</option>
                            </select>
                        </div>
                        <div class="col s2" class="browser-default">
                            <select id="packages" class="browser-default" onchange="packagesDropDownLists()">
                                <option>Choose Packaging</option>
                            </select>
                        </div>
                        <div class="col s2">
                            <select id="dimension" class="browser-default">
                                <option value="dimention">Dimention</option>
                            </select>
                        </div>
                        <div class="col s2">
                            <select id="weight" class="browser-default">
                                <option >Weight</option>
                            </select>
                        </div>
                        <div class="col s2">
                            <select id="price" class="browser-default">
								<option value="dimention">Price</option>
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
	var origin;
	var destination;
    function configureDropDownLists() {
        var places = ['Select Destination','Manila', 'Imus Cavite', 'Sta. Rosa Laguna', 'Pampanga', 'Naga City, Bicol Region', 'Cebu', 'Davao', 'Cagayan De Oro'];
        
       
		
		origin=$("#origin").find(":selected").text();
		$("#destination").empty();
		
		var str="";
		for(var i=0;i<places.length;i++){
				str += "<option>"+ places[i] + "</option>";
		}
		$("#destination").append(str);
    }
	function packagesDropDownLists(){
		$("#dimension").empty();
		$("#weight").empty();
		$("#price").empty();
		 switch ($("#packages").find(":selected").text()) {
            case 'Pouch - S':
				$("#dimension").append("<option>15.26 x 27.94</option>");
                $("#weight").append("<option><1kg</option>");
				switch (origin) {
					case 'Manila':
						switch (destination) {
							case 'Manila':
								$("#price").append("<option>60</option>");
								break;
							case 'Imus Cavite':
								$("#price").append("<option>115</option>");
								break;
							case 'Sta. Rosa Laguna':
								$("#price").append("<option>115</option>");
								break;
							case 'Naga City, Bicol Region':
								$("#price").append("<option>115</option>");
								break;
							case 'Cebu':
								$("#price").append("<option>120</option>");
								break;
							case 'Davao':
								$("#price").append("<option>130</option>");
								break;
							case 'Cagayan De Oro':
								$("#price").append("<option>125</option>");
								break;
						}
						break;
				}
                break;
            case 'Pouch - M':
                $("#dimension").append("<option>25.4 x 33.02</option>");
				$("#weight").append("<option><2kg</option>");
				switch (origin) {
					case 'Manila':
						switch (destination) {
							case 'Manila':
								$("#price").append("<option>75</option>");
								break;
							case 'Imus Cavite':
								$("#price").append("<option>145</option>");
								break;
							case 'Sta. Rosa Laguna':
								$("#price").append("<option>145</option>");
								break;
							case 'Naga City, Bicol Region':
								$("#price").append("<option>145</option>");
								break;
							case 'Cebu':
								$("#price").append("<option>170</option>");
								break;
							case 'Davao':
								$("#price").append("<option>190</option>");
								break;
							case 'Cagayan De Oro':
								$("#price").append("<option>180</option>");
								break;
						}
						break;
				}
                break;
            case 'Pouch - L':
                $("#dimension").append("<option>30.48 x 43.18</option>");
				$("#weight").append("<option><3kg</option>");
				switch (origin) {
					case 'Manila':
						switch (destination) {
							case 'Manila':
								$("#price").append("<option>80</option>");
								break;
							case 'Imus Cavite':
								$("#price").append("<option>170</option>");
								break;
							case 'Sta. Rosa Laguna':
								$("#price").append("<option>170</option>");
								break;
							case 'Naga City, Bicol Region':
								$("#price").append("<option>170</option>");
								break;
							case 'Cebu':
								$("#price").append("<option>215</option>");
								break;
							case 'Davao':
								$("#price").append("<option>245</option>");
								break;
							case 'Cagayan De Oro':
								$("#price").append("<option>230</option>");
								break;
						
						}
						break;
				}
                break;
            case 'Box - S':
                $("#dimension").append("<option>20 x 20 x 35</option>");
				$("#weight").append("<option><5kg</option>");
				switch (origin) {
					case 'Manila':
						switch (destination) {
							case 'Manila':
								$("#price").append("<option>120</option>");
								break;
							case 'Imus Cavite':
								$("#price").append("<option>380</option>");
								break;
							case 'Sta. Rosa Laguna':
								$("#price").append("<option>380</option>");
								break;
							case 'Naga City, Bicol Region':
								$("#price").append("<option>380</option>");
								break;
							case 'Cebu':
								$("#price").append("<option>360</option>");
								break;
							case 'Davao':
								$("#price").append("<option>410</option>");
								break;
							case 'Cagayan De Oro':
								$("#price").append("<option>390</option>");
								break;
						}
						break;
				}
                break;
			case 'Box - M':
                $("#dimension").append("<option>30 x 30 x 30</option>");
				$("#weight").append("<option><10kg</option>");
				switch (origin) {
					case 'Manila':
						switch (destination) {
							case 'Manila':
							$("#price").append("<option>185</option>");
							break;
						}
						break;
				}
                break;
			case 'Box - L':
                $("#dimension").append("<option>40 x 40 x 40</option>");
				$("#weight").append("<option><20kg</option>");
				switch (origin) {
					case 'Manila':
						switch (destination) {
							case 'Manila':
								$("#price").append("<option>330</option>");
								break;
							case 'Imus Cavite':
								$("#price").append("<option>1400</option>");
								break;
							case 'Sta. Rosa Laguna':
								$("#price").append("<option>1400</option>");
								break;
							case 'Naga City, Bicol Region':
								$("#price").append("<option>1400</option>");
								break;
							case 'Cebu':
								$("#price").append("<option>1300</option>");
								break;
							case 'Davao':
								$("#price").append("<option>1500</option>");
								break;
							case 'Cagayan De Oro':
								$("#price").append("<option>1415</option>");
								break;
						}
						break;
				}
                break;
        }
	}
	function destinationDropDownLists(){
		var package = ['Choose Packaging','Pouch - S', 'Pouch - M', 'Pouch - L', 'Box - S', 'Box - M', 'Box - L'];
		
		destination=$("#destination").find(":selected").text();
		$("#packages").empty();
		
		var str="";
		for(var i=0;i<package.length;i++){
				str += "<option>"+ package[i] + "</option>";
		}
		$("#packages").append(str);
	}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>

</html>