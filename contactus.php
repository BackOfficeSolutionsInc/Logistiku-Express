<?php
//index.php

$error = '';
$fname = '';
$lname = '';
$email = '';
$contact ='';
$subject = '';
$message = '';
$checkbox = '';

function clean_text($string) {
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}
if(isset($_POST["submit"])) {
    if(empty($_POST["fname"]))
    {
     $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
    } else {
        $name = clean_text($_POST["fname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$fname))
        {
            $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }
    }
    if(empty($_POST["lname"])) {
        $error .= '<p><label class="text-danger">Please Enter your Last Name</label></p>';
    } else {
        $name = clean_text($_POST["lname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$lname)) {
            $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }  
    }
    if(empty($_POST["email"])) {
        $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
    } else {
        $email = clean_text($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= '<p><label class="text-danger">Invalid email format</label></p>';
        }
    }
    if(empty($_POST["contact"])) {
        $error .= '<p><label class="text-danger">Please Enter your Contact Number</label></p>';
    } else {
        $name = clean_text($_POST["contact"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $error .= '<p><label class="text-danger">Only numbers allowed</label></p>';
        }
    }
    if(empty($_POST["subject"])) {
        $error .= '<p><label class="text-danger">Subject is required</label></p>';
    } else {
        $subject = clean_text($_POST["subject"]);
    }
    if(empty($_POST["message"])) {
        $error .= '<p><label class="text-danger">Message is required</label></p>';
    } else {
        $message = clean_text($_POST["message"]);
    }
    if(empty($_POST["checkbox"])) {
        $error .= '<p><label class="text-danger">Please check Do you agree?</label></p>';
    }
    if($error == '') {
        require 'class/PHPMailer.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtpout.secureserver.net';
        $mail->Port = '80';
        $mail->SMTPAuth = true;
        $mail->Username = 'xxxxxxxxxx';
        $mail->Password = 'xxxxxxxxxx';
        $mail->SMTPSecure = '';
        $mail->From = $_POST["email"];
        $mail->FromName = $_POST["fname"];
        $mail->AddAddress('customer@logistikus.com', 'fname');
        $mail->AddCC($_POST["email"], $_POST["fname"]);
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];
        if($mail->Send()) {
            $error = '<label class="text-success">Thank you for contacting us</label>';
        } else {
            $error = '<label class="text-danger">There is an Error</label>';
    }
        $fname = '';
        $lname = '';
        $email = '';
        $subject = '';
        $message = '';
        $checkbox = '';  
    }
}

?>

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
    <link type="text/css" rel="stylesheet" href="style/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
                <div class="col s12">
                    <h1>We&#146;d love to hear from you!</h1>
                    <span class="address">331 Jennys Avenue, Pasig City <br />20th Floor, Inoza Tower, 40th Street, Bonifacio Global City</span><br />
                    <span class="number"><i>(02) 515-8141<br />
                                            (0923) 957-8550 / (0945) 830-2620 <br />
                                            customer@logistikus.com</i>
                    </span>
                    <hr>
                </div>
                <div class="col s6">
                    <div class="row">
                        <?php echo $error; ?>
                    <form id="contact" method="post">
                        <div class="col s12 m6 l3"><label for="fname">First name : </label></div>
                        <div class="col s12 m6 l3"><input type="text1" name="fname" class="field" value="<?php echo $fname; ?>" tabindex="1" required autofocus></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l3"><label for="lname">Last name : </label></div>
                        <div class="col s12 m6 l3"><input type="text1" name="lname" class="field" value="<?php echo $lname; ?>" tabindex="2" required autofocus></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l3"><label for="email">Email Address : </label></div>
                        <div class="col s12 m6 l3"><input type="email1" name="email" class="field" value="<?php echo $email; ?>" tabindex="3" required autofocus></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l3"><label for="contact">Contact Number : </label></div>
                        <div class="col s12 m6 l3"><input type="number1" name="contact" class="field" value="<?php echo $contact; ?>" tabindex="4" required autofocus></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l3"><label for="subject">Subject : </label></div>
                        <div class="col s12 m6 l3"><input type="text1" name="subject" class="field" value="<?php echo $subject; ?>" tabindex="5" required autofocus></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l3"><label for="message">Message : </label></div>
                        <div class="col s12 m6 l3"><textarea id="textarea1" name="message" class="textarea" value="<?php echo $message; ?>" cols="30" rows="5" tabindex="6" required autofocus></textarea></div>
                    </div>
                    </form>
                </div>
                <div class="col s6">
                    <label for="consent"><span>Consent Agreement :</span></label>
                        <div>I hereby agree and understand that by clicking the
                        submit
                        button below, I am agreeing to Logistikus Express' Privacy Policy and giving my full consent
                        to
                        all related businesses/affiliate, if any, to collect, store, access and/or process any
                        personal
                        data I may provide herein for legitimate business purpose of allowing Logistikus Express to
                        contact me and address my concerns (as stated in this form). I acknowledge that the
                        collection
                        and processing of my personal data is necessary for such purposes. I am aware of my rights
                        as
                        stated in the Data Privacy Act of 2012 and I understand that there are procedures,
                        conditions
                        and exceptions that I need to comply in order to exercise or invoke my rights.</div> <br />
                        <label>
                            <input type="checkbox" class="filled-in" value="<?php echo $checkbox; ?>" name="checkbox" tabindex="7" required autofocus />
                            <span>Do you aggree?</span>
                        <div class="button2"><a class="waves-effect waves-dark btn" type ="submit">Submit</a>
                            <a class="waves-effect waves-dark btn">Clear</a>
                        </div></label>
                        <br />
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
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>


</html>