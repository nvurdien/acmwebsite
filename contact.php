<!DOCTYPE html><html lang=en><meta charset=utf-8><link href=img/acm-desktopcta.png rel=apple-touch-icon sizes=76x76><link href=img/acm-desktopcta.png rel=icon type=image/png><meta content="IE=edge,chrome=1"http-equiv=X-UA-Compatible><meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"name=viewport><title>CSUF ACM Contact</title><link href=https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/css/uikit.min.css rel=stylesheet><link href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel=stylesheet><link href=static/css/style.css rel=stylesheet><script src=https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/js/uikit.min.js></script><script src=https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/js/uikit-icons.min.js></script><div id=offcanvas-navbar uk-offcanvas="mode: reveal; flip: true;"><div class=uk-offcanvas-bar><ul class="uk-nav uk-nav-default"><li><a href=about>About Us</a><li><a href=board>The Board</a><li class=uk-parent><a href=events>Events</a><ul class=uk-nav-sub><li><a href=events>Schedule</a><li><a href=seminars>Seminars</a></ul><li class=uk-active><a href=contact>Contact Us</a><li><a href=subscribe>Get Involved</a></ul></div></div><div class="uk-background-blend-multiply uk-background-cover uk-background-primary uk-cover-container uk-flex uk-flex-center uk-height-medium uk-light uk-overflow-hidden"style=background-image:url(img/IMG_0770.JPG);background-position:center><div class="uk-text-center uk-width-1-2@m"><div class=uk-overlay><br><h1 class="uk-text-center uk-heading-line">Contact Us</h1><p class=uk-text-center style=transform:scale(.5);opacity:0 uk-parallax="opacity: 0,1; scale: 0.5,1; viewport: 0.5;">Let's keep in touch.</div></div></div><nav class="uk-navbar-container uk-navbar-primary"uk-navbar uk-sticky="show-on-up: true; animation: uk-animation-slide-top; top:0"><div class=uk-navbar-left><div class="uk-inline-clip uk-margin-left uk-transition-toggle"tabindex=""><img alt="home link logo"height=50 src=http://acm.ecs.fullerton.edu/img/acm-desktopcta.png width=50> <a href=/ ><img alt="hover home link logo"height=50 src=http://acm.ecs.fullerton.edu/img/acm-desktopctahover.png width=50 class="uk-position-cover uk-transition-fade"></a></div></div><div class=uk-navbar-right><ul class="uk-navbar-nav uk-visible@s"><li><a href=about class="uk-button uk-button-text">About Us</a><li><a href=board class="uk-button uk-button-text">The Board</a><li><a href=events class="uk-button uk-button-text">Events</a><div class=uk-navbar-dropdown><ul class="uk-nav uk-navbar-dropdown-nav"><li><a href=events>Schedule</a><li><a href=seminars>Seminars</a></ul></div><li class=uk-active><a href=contact class="uk-button uk-button-text">Contact Us</a><li><a href=subscribe class="uk-button uk-button-text">Get Involved</a></ul><div class="uk-navbar-right uk-hidden@s"><a class=uk-navbar-toggle uk-navbar-toggle-icon uk-toggle="target: #offcanvas-navbar"></a></div></div></nav><div class="uk-section uk-section-default"role=main><div class=uk-container><?php
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
          if(!$_POST['name'] || !$_POST['email'] || !$_POST['message'] || !$_POST['subject']){
              echo '<div class="uk-alert-danger" uk-alert>
      <a class="uk-alert-close" uk-close></a>
      <p>Please fill out the form completely.</p>
  </div>';
          }
          else if(!$mail->send()) {
          echo '<div class="uk-alert-danger" uk-alert>
      <a class="uk-alert-close" uk-close></a>
      <p>Message could not be sent.</p>
  </div>';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {//says message is sent
              echo '<div class="uk-alert-success" uk-alert>
      <a class="uk-alert-close" uk-close></a>
      <p>Message Sent! Thank you!</p>
  </div>';
          }

      }
  ?><form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>"method=post><fieldset class=uk-fieldset><h1>Get in Touch With ACM</h1><legend class=uk-legend>Please send us any questions, comments or concerns.</legend><p>You may use the form or email us at <a href=mailto:acmcsufullerton@gmail.com class=uk-link-muted>acmcsufullerton@gmail.com</a><div class=uk-margin><input alt=name class=uk-input id=name label=""name=name placeholder="Your Name*"required title=name></div><div class=uk-margin><input alt=email class=uk-input id=email label=""name=email placeholder="Your Email*"required title=email type=email></div><div class=uk-margin><input alt=subject class=uk-input id=subject label=""name=subject placeholder="Your Subject*"required title=subject></div><div class=uk-margin><textarea alt=message class=uk-textarea id=message label=""name=message placeholder="Your Message*"required rows=5 title=message></textarea></div><div class="uk-margin uk-text-center"uk-margin><button class="uk-button uk-button-default"id=but name=but>Submit</button></div></fieldset></form></div></div><div class="uk-section uk-section-primary"><div class=uk-container><div class="uk-child-width-1-2@s uk-child-width-1-3@m"uk-grid><div><h3>ACM <span class="fa fa-fw fa-pulse fa-star"></span> CSUF</h3><p>Association of Computing Machinery<br>California State University, Fullerton</div><div><h3>Find us on Social Media</h3><p><a href=https://www.twitter.com/acmcsuf class="uk-margin-small-right uk-icon-button"aria-label="twitter link"target=_blank title=@acmcsuf uk-icon="icon: twitter"uk-tooltip="pos: bottom"></a> <a href=https://www.facebook.com/groups/acmcsuf class="uk-margin-small-right uk-icon-button"aria-label="facebook group link"target=_blank title=/group/acmcsuf uk-icon="icon: facebook"uk-tooltip="pos: top"></a> <a href=https://www.instagram.com/acmcsuf class="uk-margin-small-right uk-icon-button"aria-label="instagram link"target=_blank title=@acmcsuf uk-icon="icon: instagram"uk-tooltip="pos: right"></a></div><div><h3>Meetings</h3><p>ICPC Practice @ CS101 starting 9/22/17<br><span class=uk-margin-small-right uk-icon="icon: git-fork"></span>Bi-weekly Fridays 4-6pm<p>Project Jams @ CS300 starting 9/29/17<br><span class=uk-margin-small-right uk-icon="icon: git-branch"></span>Bi-weekly Fridays 4-8pm</div></div></div></div>