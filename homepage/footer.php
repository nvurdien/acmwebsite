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
