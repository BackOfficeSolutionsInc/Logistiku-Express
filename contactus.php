<?php
require('constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="component/jquery/jquery-3.2.1.min.js"></script>
	<script>
	$(document).ready(function (e){
		$("#frmContact").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			$('#loader-icon').show();
			$.ajax({
				url: "contact.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"phone":$('input[name="phone"]').val(),
				"subject":$('input[name="subject"]').val(),
				"content":$('textarea[name="content"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				$('#loader-icon').hide();
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					$('#send-message').hide();
					$("#mail-status").attr("class","success");							
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script>

	<style>
	.label {margin: 2px 0;}
	.field {margin: 0 0 20px 0;}	
		.content {width: 960px;margin: 0 auto;}
		h1, h2 {font-family:"Georgia", Times, serif;font-weight: normal;}
		div#central {margin: 40px 0px 100px 0px;}
		@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
		@media all and (max-width: 767px) {
			body {margin: 0 auto;word-wrap:break-word}
			.content {width:auto;}
			div#central {	margin: 40px 20px 100px 20px;}
		}
		body {font-family: 'Helvetica',Arial,sans-serif;background:#ffffff;margin: 0 auto;-webkit-font-smoothing: antialiased;  font-size: initial;line-height: 1.7em;}	
		input, textarea {width:100%;padding: 15px;font-size:1em;border: 1px solid #A1A1A1;	}
		button {
			padding: 12px 60px;
			background: #5BC6FF;
			border: none;
			color: rgb(40, 40, 40);
			font-size:1em;
			font-family: "Georgia", Times, serif;
			cursor: pointer;	
		}
		#message {  padding: 0px 40px 0px 0px; }
		#mail-status {
			padding: 12px 20px;
			width: 100%;
			display:none; 
			font-size: 1em;
			font-family: "Georgia", Times, serif;
			color: rgb(40, 40, 40);
		}
	  .error{background-color: #F7902D;  margin-bottom: 40px;}
	  .success{background-color: #48e0a4; }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>	
	<link type="text/css" rel="stylesheet" href="style/contactus.css">
</head>
<body>
<?php include 'nav.php';?>
<div class="container">
    </div>

    <div class="parallax-container">

        <div class="parallax responsive-img"><img src="images/header/contactus_header2.jpg"></div>
        <div id="mobile-bg"> </div>
    </div>
<div class="section white">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<h1>We&#146;d love to hear from you!</h1>
							<span class="address">331 Jennys Avenue, Pasig City <br />20th Floor, Inoza Tower, 40th Street, Bonifacio Global City</span><br />
							<span class="number"><i>(02) 515-8141<br />
													(0923) 957-8550 / (0945) 830-2620 <br />
													customer@logistikus.com</i>
							</span>
							<hr>
				</div><!-- col-12 -->
				<div class="col s6">
				<form id="frmContact" action="" method="POST" novalidate="novalidate">
                    <!--<div class="label">Name:</div>-->
                    <div class="field">
					<label for="Full Name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name here" title="Please enter your full name" class="required" aria-required="true" required>
                    </div>
                    <!--<div class="label">Email:</div>-->
                    <div class="field">
					<label for="Email">Email</label>			
                        <input type="text" id="email" name="email" placeholder="Enter your email address here" title="Please enter your email address" class="required email" aria-required="true" required>
                    </div>
                    <!--<div class="label">Phone Number:</div>-->
                    <div class="field">
					<label for="Contact Number">Contact Number</label>			
                        <input type="text" id="phone" name="phone" placeholder="Enter your contact number" title="Please enter your phone number" class="required phone" aria-required="true" required>
                    </div>
                    <!--<div class="label">Name:</div>-->
					<label for="Subject">Subject</label>
                    <div class="field">
                        <input type="text" id="subject" name="subject" placeholder="Enter subject here" title="Please enter subject" class="required" aria-required="true" required>
                    </div>				
                    <!--<div class="label">Comments:</div>-->
                    <div class="field">	
					<label for="Message">Message</label>			
                        <textarea id="comment-content" name="content" placeholder="enter your comments here"></textarea>	
                    </div>
				</div><!-- col s6 --> 
				<div class="col s6">
				<label for="consent"><span>Consent Agreement :</span></label>
                    <div><p style="text-align:justify;">I hereby agree and understand that by clicking the submit button below, I am agreeing to Logistikus Express' 
                    Privacy Policy and giving my full consent to all related businesses/affiliate, if any, to collect, store, access 
                    and/or process any personal data I may provide herein for legitimate business purpose of allowing Logistikus Express 
                    to contact me and address my concerns (as stated in this form). I acknowledge that the collection and processing of 
                    my personal data is necessary for such purposes. I am aware of my rights as stated in the Data Privacy Act of 2012 
                    and I understand that there are procedures, conditions and exceptions that I need to comply in order to exercise or invoke my rights.</p></div> <br />

                    <div class="form-group form-check">
					<label>
						<input type="checkbox" name="agree" />
						<span>Do you agree?</span>
					</label>
                    </div>
                    <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>			
                    <div id="mail-status"></div>			
                    <button type="Submit" id="send-message" style="clear:both;">Send Message</button>
                </form>
                <div id="loader-icon" style="display:none;"><img src="images/loader.gif" /></div>
				</div><!-- col s6 --> 
			</div><!-- row --> 
		</div><!-- container --> 
</div> <!-- section white -->      
 <!-- Compiled and minified JavaScript -->
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
<?php include 'footer.php';?>
</body>
</html>