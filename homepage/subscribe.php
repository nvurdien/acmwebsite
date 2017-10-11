<?php require 'header.php' ?>

      <li><a href="about">About Us</a></li>
      <li><a href="board">The Board</a></li>
      <li><a href="events">Events</a></li>
      <li><a href="contact">Contact Us</a></li>
      <li class="active"><a href="subscribe"> Get Involved!</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</header>


<!--Parallax div-->
<div class="bgimg" style="top:-60px" style="background:none">
  <!--overlay so you can read the text-->
  <div class="overlay">
    <div class="jumbotron text-center" style="background:none; padding-top:40px;"><BR><BR>
  <h1 style="font-family:Open Sans">Subscribe</h1>
</div>
</div>
</div>
<!--Section holds the contact thing-->
<section id="contact" style="background-color:#0094ce">
            <div class="container" style="background-color:#0094ce">
                <div class="row"  style="background-color:#0094ce">
                    <div class="about_our_company" style="margin-bottom: 20px; background-color:#0094ce;">
                        <h1 style="color:#fff;">Join our mailing List</h1>
                        <p style="color:#fff;">Join the mailing list and connect with us on Titan Link <a href="https://fullerton.campuslabs.com/engage/organization/acm">here</a>.</p>
                    </div>
                </div>
                <div class="row">
                  <!-- Begin MailChimp Signup Form -->
                  <div id="mc_embed_signup" class="col-md-12">
                  <form action="//fullerton.us11.list-manage.com/subscribe/post?u=3dbde654283a22318e4cd016d&amp;id=2dd68629b3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div class="form-inline mc-field-group col-md-12 row" id="mc_embed_signup_scroll"><!--Name-->

                    <div class="form-group mc-field-group col-md-6 col-sm-6"><!--first-->
                      <label for="mce-FNAME" style="color:#0094ce; font-size:1px;" required>First Name</label>
                        <input type="text" class="form-control" alt="name" id="mce-FNAME" title="name" placeholder="First Name" name="FNAME" label="" value="">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mc-field-group col-md-6 col-sm-6"><!--last-->
                      <label for="mce-LNAME" style="color:#0094ce; font-size:1px;" required>Last Name</label>
                        <input type="text" class="form-control" alt="name" id="mce-LNAME" title="name" placeholder="Last Name" name="LNAME" label="" value="">
                        <p class="help-block text-danger"></p>

                  </div>

                  <div class="form-group mc-field-group col-sm-12">
                    <label for="mce-EMAIL" style="color:#0094ce; font-size:1px;" required>Email</label>
                      <input type="text" class="form-control" alt="name" id="mce-EMAIL" title="name" placeholder="Email Address *" name="EMAIL" label="" value="" required>
                      <p class="help-block text-danger"></p>
                  </div>
                </div>
                  	<div id="mce-responses" class="clear">
                  		<div class="response" id="mce-error-response" style="display:none"></div>
                  		<div class="response" id="mce-success-response" style="display:none"></div>
                  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div class="col-md-12" style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3dbde654283a22318e4cd016d_2dd68629b3" tabindex="-1" value=""></div>
                      <div class="clear col-md-12"><center><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" style="width:50%" class="btn btn-xl get"></center></div>
                  </div>
                  </form>
                  </div>
                </div>
                  <!--End mc_embed_signup-->
    </section>

<?php require 'footer.php' ?>


  <!--jquery stuff-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
  <!--bootstrap js-->
  <script src="js/bootstrap.js"></script>
  <script src='js/lib/moment.min.js'></script>

  <!--Parallax scrolling-->
  <style>

  .bgimg{
    /* Full height */
      height: 50%;
      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-color: black;
    background-image: url("img/subscribe.JPG");
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
