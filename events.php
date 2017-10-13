<?php require 'header.php' ?>
<!--adds calendar css-->
<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />

      <li><a href="about">About Us</a></li>
      <li><a href="board">The Board</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="events" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span id="eventdrop" style="color:#e17000;" onMouseOver="this.style.color='#428bca';" onMouseOut="this.style.color='#e17000'">Events <span class="fa fa-caret-down" style="color:#e17000;" onMouseOver="this.style.color='#428bca';" onMouseOut="this.style.color='#e17000'"></span></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="padding-left:20px">
          <a class="dropdown-item" href="events" style="display:block;" onMouseOver="this.style.color='#e17000'; this.style.textDecoration='none'; this.style.backgroundColor='#D3D3D3';" onMouseOut="this.style.backgroundColor='#fff'">Schedule</a>
          <a class="dropdown-item" href="seminars" style="display:block"  onMouseOver="this.style.color='#e17000'; this.style.textDecoration='none'; this.style.backgroundColor='#D3D3D3';" onMouseOut="this.style.backgroundColor='#fff'">Seminar</a>
          <a class="dropdown-item" href="#" style="display:block"  onMouseOver="this.style.color='#e17000'; this.style.textDecoration='none'; this.style.backgroundColor='#D3D3D3';" onMouseOut="this.style.backgroundColor='#fff'">ICPC Solutions (Coming soon)</a>
        </div>
      </li>
      <li><a href="contact">Contact Us</a></li>
      <li><a href="subscribe"> Get Involved!</a></li>
      </ul>
  </div><!--/.nav-collapse -->
</div>
</header>
<!--End of Navigation Bar-->
<!--Title of page-->
<title>CSUF ACM::Events</title>


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
<script src='js/jquery-ui.custom.min.js'></script>
<!--Calendar js-->
<script src='js/lib/moment.min.js'></script>
<script src='js/fullcalendar.js'></script>
<script src='js/gcal.min.js'></script>

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
</html>
