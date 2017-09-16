<?php require 'header.php' ?>
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
                                        <p style="text-align:center"><input type="submit" name="but" value="Submit" style="width:100%;" class="btn btn-xl get"/></p>

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

<?php require 'footer.php' ?>


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
</html>
