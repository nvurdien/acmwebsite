<?php require 'header.php' ?>
<!--adds calendar css-->
<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />

      <li><a href="about">About Us</a></li>
      <li><a href="board">The Board</a></li>
      <li class="active"><a href="events">Events</a></li>
      <li><a href="contact">Contact Us</a></li>
      <li><a href="subscribe"> Get Involved!</a></li>
      </ul>
  </div><!--/.nav-collapse -->
</div>
</header>
<!--End of Navigation Bar-->
<body style="background-color:#f6f6f6;">
<!--Parallax div-->
<div class="bgimg" style="top:-40px">
  <!--overlay so you can read the text-->
  <div class="overlay">
    <div class="jumbotron text-center" style="background:none; padding-top:40px;"><BR><BR>
  <h1 style="font-family:Open Sans">Events</h1>
</div>
</div>
</div>

<!--Section holds the calendar thing-->
<div class="container">
  <div class="row">
    <BR>
<div id='calendar'>
</div>
<BR>
</div>
</div>

<?php require 'footer.php' ?>

</body>
  <!--jquery stuff-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src='js/jquery-ui.custom.min.js'></script>
<!--bootstrap js-->
<script src="js/bootstrap.js"></script>
<!--Calendar js-->
<script src='js/lib/moment.min.js'></script>
<script src='js/fullcalendar.js'></script>
<script src='js/gcal.min.js'></script>

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
    width: 100%;
    background-color: black;
  background-image: url("img/IMG_0586.JPG");
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

<!--Calendar API key and other information for calendar-->
<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({

      header: {
        left: 'title',
        				center: 'agendaDay,agendaWeek,month',
        				right: 'prev,next today'
},

      displayEventTime: false, // don't show the time column in list view

        googleCalendarApiKey: 'AIzaSyCwhfMkXl4-iaXUXfP8cBc1LEG3DESnky0',
        eventSources: [
            {
                googleCalendarId: 'jo7mgmudv8uibuffbqtdk1isgc@group.calendar.google.com'
              },
              {
                  googleCalendarId: 'hs6bk4b2nb2dvshs787timb7fo@group.calendar.google.com',
                  className: 'nice-event'
                }
        ],
        eventClick: function(event) {
  // opens events in a popup window
  window.open(event.url, 'gcalevent', 'width=700,height=600');
  return false;
  },
    });
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
</html>
