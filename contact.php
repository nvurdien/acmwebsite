<html lang="en">
<head>
<meta charset="utf-8" />
<!--When bookmarked on Apple Devices will use ACM image-->
<link rel="apple-touch-icon" sizes="76x76" href="img/acm-desktopcta.png">
<!--icon for page-->
<link rel="icon" type="image/png" href="img/acm-desktopcta.png">
<!--Adds compatibility with edge and chrome-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!--changes scale when used on phone-->
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

<!--adds bootstrap css-->
<link href="css/bootstrap.css" rel="stylesheet" />

<!--adds fonts-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<!--adds icon fonts-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" />

<!--So you can add code in a pretty fashion on the site-->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

</head>

<!--Title of page-->
<title>CSUF ACM::Contact Us</title>

<!--NAVIGATION BAR START-->
<header class="nav-down" id="navbar">
  <div class="container">
    <!--BRAND-->
  <a class="navbar-brand" href="/" ><img src="img/acm-desktopcta.png" onmouseover="this.src='img/acm-desktopctahover.png';" onmouseout="this.src='img/acm-desktopcta.png';" height=50px width=50px alt="ACM Logo"></a>
  <!--For phones or smaller screens will have a drop down menu of each link for the site-->
  <div class="navbar-header" style="padding-top:20px;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background-color:#00274c; border-color:#005daa;">
    <span class="sr-only" color="white">Toggle navigation</span>
    <span class="icon-bar" style="background-color:#005daa"></span>
    <span class="icon-bar" style="background-color:#005daa"></span>
    <span class="icon-bar" style="background-color:#005daa"></span>
  </button>
</div>
<!--Navigation bar links-->
  <div class="navbar-collapse collapse navbar-right" style="background-color:#00274c; padding-top:20px;">
    <ul class="nav navbar-nav">
      <li><a href="about">About Us</a></li>
      <li><a href="board">The Board</a></li>
      <li><a href="events">Events</a></li>
      <li class="active"><a href="contact">Contact Us</a></li>
      <li><a href="subscribe">Get Involved!</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</header>
<!--End of Navigation Bar-->

<!--Parallax div-->
<div class="bgimg" style="top:-40px" style="background:none">
  <!--overlay so you can read the text-->
  <div class="overlay">
    <div class="jumbotron text-center" style="background:none; padding-top:40px;"><BR><BR>
  <h1 style="font-family:Open Sans">Contact Us</h1>
</div>
</div>
</div>
<!--Section holds the contact thing-->
<section id="contact" style="background-color:#0094ce">
            <div class="container" style="background-color:#0094ce">
                <div class="row"  style="background-color:#0094ce">
                    <div class="about_our_company" style="margin-bottom: 20px; background-color:#0094ce;">
                        <h1 style="color:#fff;">Get In Touch With ACM</h1>
                        <p style="color:#fff;">Please send us any questions, comments or concerns.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"><!--Name-->
                                      <label for="name" style="color:#0094ce; display:none;" required>Name</label>
                                        <input type="text" class="form-control" alt="name" id="name" title="name" placeholder="Your Name *" name="name" label="" value="<?php echo $name;?>" required>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group"><!--Email-->
                                      <label for="email" style="color:#0094ce; display:none;" required>Email</label>
                                        <input type="email" class="form-control" alt="email" id="email" title="email" placeholder="Your Email *" name="email" value="<?php echo $email;?>" required>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group"><!--Subject-->
                                    <label for="subject" style="color:#0094ce; display:none;" required>Subject</label>
                                      <input type="text" class="form-control" alt="subject" id="subject" title="subject" placeholder="Your Subject *" name="subject" value="<?php echo $subject;?>" required>
                                      <p class="help-block text-danger"></p>
                                  </div>
                                    <div class="form-group"><!--Message-->
                                      <label for="message" style="color:#0094ce; display:none;" required>Message</label>
                                        <textarea class="form-control" alt="message" title="message" id="message" placeholder="Your Message *" name="message" value="<?php echo $message;?>" required></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                        <div id="success"></div><!--Submit button-->
                                        <p style="text-align:center"><input type="submit" name="but" value="Submit" class="btn btn-xl get"/></p>

                                </div>

                            </div>
                        </form>
<?php
	if (isset($_POST['but'])) {
	require 'PHPMailer/PHPMailerAutoload.php';
  include 'password.php';
	$mail = new PHPMailer;

	$mail->IsSMTP();
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'acmcsufullerton@gmail.com';        // SMTP username
  /* passwd is from password.php, which is ignored by the git repository. you'll need to create a php file with a variable
  * named "passwd" to make this work */
  $mail->Password = $passwd;
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('acmcsufullerton@gmail.com', 'Website Form Submission');
	$mail->addAddress('acmcsufullerton@gmail.com', 'Website Form Submission');     // Add a recipient

	$mail->Subject = $_POST['subject'];
	$mail->Body    = "Message from " .$_POST['name']. "\nReply to this email: ". $_POST['email'] . "\n\n" .$_POST['message'];

	if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {//says message is sent
		echo '<div class="about_our_company" style="margin-bottom: 20px; text-align: left;"><h1 style="color:#fff;">Message has been sent</h1></div>';
}

}
?>
                    </div>
                    <div class="col-md-4">
                        <p style="color:#fff;"><!--side thing--><!--email-->
                            <strong><i class="fa fa-envelope" style="color:white"></i>  Email Address</strong><br>
                            <a href="mailto:acmcsufullerton@gmail.com" style="color:white; text-decoration:none;">acmcsufullerton@gmail.com</a></p>
                        <p></p>
                    </div>

                </div>
            </div>
        </section>
</div>
<!--end sections-->

<!--Footer Start-->
<div id="footerwrap">
  <div class="container">
<div class="row">
  <div class="col-lg-4">
        <h4>ACM <span class="fa fa-star fa-fw fa-pulse"></span> CSUF</h4>
        <p>
        Association of Computing Machinery<BR>
        California State University, Fullerton
      </p>
    </div>
    <div class="col-lg-4">
          <h4>Find us on Social Media!</h4>
          <p>
            <a href=https://www.twitter.com/acmcsuf target="_blank"><span class="fa fa-twitter-square fa-2x"></span></a>
            <a href=https://www.facebook.com/groups/acmcsuf  target="_blank"><span class="fa fa-facebook-square fa-2x"></span></a>
            <a href=https://www.instagram.com/acmcsuf target="_blank"><span class="fa fa-instagram fa-2x"></span></a>
          </p>
      </div>
      <div class="col-lg-4">
            <h4>Meetings</h4>
            <p>
              ICPC Practice @ CS101 starting 9/22/17<BR>
                <i class="fa fa-hand-o-right fa-fw fa-inverse" style="font-size:1em; color:#fff"></i>Bi-weekly Fridays 4-6pm
            </p>
            <p>
              Project Jams @ CS300 starting 9/29/17<BR>
                <i class="fa fa-hand-o-right fa-fw fa-inverse" style="font-size:1em; color:#fff"></i>Bi-weekly Fridays 4-8pm
            </p>
        </div>
</div>
</div>
</div>
<!--Footer End-->

<!--jquery stuff-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<!--bootstrap js-->
<script src="js/bootstrap.js"></script>
<script src='js/lib/moment.min.js'></script>

<!--allows header to go up with scroll and go down on up scroll-->
<script type="text/javascript">
var previousScroll = 0,
    headerOrgOffset = $('header').outerHeight();

$(window).scroll(function () {
    var currentScroll = $(this).scrollTop();
    if (currentScroll > headerOrgOffset) {
        if (currentScroll > previousScroll) {
            $('header').addClass('nav-up').removeClass('nav-down');
        } else {
            $('header').addClass('nav-down').removeClass('nav-up');
        }
    } else {
            $('header').addClass('nav-down').removeClass('nav-up');
    }
    previousScroll = currentScroll;
});
</script>

<!--Parallax scrolling-->
<style>

.bgimg{
  /* Full height */
    height: 50%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: black;
  background-image: url("img/IMG_0770.JPG");
  min-height: 50%;
}
.overlay{
  height:100%;
  background: rgba(0, 93, 170, 0.7);
  min-height: 100%;
  -webkit-box-shadow: inset 0px -5px 5px 0px black;
  -moz-box-shadow: inset 0px -5px 5px 0px rgba(0,0,0,0.45);
  box-shadow: inset 0px -5px 5px 0px rgba(0,0,0,0.45);
z-index: 88;
position: relative;
}


@media only screen and (max-device-width: 1024px) {
    .bgimg {
        background-attachment: scroll;
    }
}

</style>

<!--Slide Animation-->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".nav a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        document.location.hash = hash;
      });
    } // End if
  });

  $(document).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(document).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</html>
