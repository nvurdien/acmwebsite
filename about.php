<?php require 'header.php' ?>

      <li class="active"><a href="about">About Us</a></li>
      <li><a href="board">The Board</a></li>
      <li><a href="events">Events</a></li>
      <li><a href="contact">Contact Us</a></li>
      <li><a href="subscribe">Get Involved!</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</header>
<!--End of Navigation Bar-->

<!--End of Navigation Bar-->
<body style="background-color:#f6f6f6;">
<!--Parallax div-->
<div class="bgimg" style="top:-40px">
  <!--overlay so you can read the text-->
  <div class="overlay">
    <div class="jumbotron text-center" style="background:none; padding-top:40px;"><BR><BR>
  <h1 style="font-family:Open Sans">About</h1>
</div>
</div>
</div>

<!--First Section-->
<div class="section" class="col-sm-12">
  <h2>Who We Are</h2>
  <h4>ACM (founded 1947) is an international scientific and educational organization dedicated to advancing the art, science, engineering, and application of information technology, serving both professional and public interests by fostering the open interchange of information and by promoting the highest professional and ethical standards.
<BR>The Student Chapter of ACM at CSUF provides a continuing forum for the exchange of ideas and announcements for all the students on campus that share an interest in the diversified aspects of computing.</h4>
  </div>

<!--Second Section-->
<div class="section" class="col-sm-12 all" style="background-color:#0094ce; box-shadow: 0 0 5px black;">
<h2>What we Offer</h2>
<h4>The Student Chapter of ACM at CSUF is an open organization to any student with interest in computers and/or computing. The ACM holds monthly general meetings throughout the semester. These meetings provide an excellent environment for students in which to exchange views, opinions, meet new friends and trade secret techniques. In addition to regular meetings, CSUF's Student Chapter of the ACM hosts selected speaker forums, monthly contests, software and hardware workshops, arranges company tours and plans social activities throughout the semester. Everyone is welcome, and encouraged to attend the meetings!</h4>

<!--Slide Animation for each thing we do-->
  <div class="col-lg-3 slideanim"><center><i class="fa fa-gift fa-3x" style="color:#303030"></i><h2>Projects</h2></div>
    <div class="col-lg-3 slideanim"><center><i class="fa fa-home fa-3x"  style="color:#303030"></i><h2>Workshops</div>
      <div class="col-lg-3 slideanim"><center><i class="fa fa-trophy fa-3x"  style="color:#303030"></i><h2>ICPC Practice</div>
        <div class="col-lg-3 slideanim"><center><i class="fa fa-code fa-3x"  style="color:#303030"></i><h2>Hackathons</div>

<h4>Let us know if you have an idea for a project or workshop, so we can start planning right away!</h4>
</div>

<?php require 'footer.php' ?>


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
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    background-color: black;
  background-image: url("img/20170825_171902.jpg");
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
