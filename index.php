<?php require 'header.php' ?>

        <li><a href="about">About Us</a></li>
        <li><a href="board">The Board</a></li>
        <li><a href="events">Events</a></li>
        <li><a href="contact">Contact Us</a></li>
        <li><a href="subscribe"> Get Involved!</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
  </header>
  <!--End of Navigation Bar-->

<!--PARALAX DIV-->
  <div class="bgimg">
    <!--overlay so you can read the text-->
    <div class="overlay">
    <div class="jumbotron text-center" style="background:none;"><BR><BR><BR><BR>
      <h1>Association for Computing Machinery</h1>
      <hr style="width:50%">
      <h3>CSUF ACM</h3>
<BR><BR>
    </div>

  </div>
</div>

<!--First section-->
<div id="about">
<h2>Our Goal</h2>
<h4>Providing tools for every student's success</h4>
<p style="color:#303030">Please click the links in the navigation bar to learn more about what we do and how you can get involved!</p>
</div>

<?php require 'footer.php' ?>


</body>

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
    height: 80%;
    /* Create the parallax scrolling effect https://farm5.staticflickr.com/4059/4696338852_bde479b169_o.jpg" */
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: black;
  background-image: url("https://farm3.staticflickr.com/2824/34183849751_74e22385fd_b.jpg");
  min-height: 80%;
}
.overlay{
  height:100%;
  background: rgba(0, 0, 0, 0.5);
  min-height: 100%;
  -webkit-box-shadow: 1px 4px 5px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 4px 5px 0px rgba(0,0,0,0.75);
  box-shadow: 1px 4px 5px 0px rgba(0,0,0,0.75);
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
