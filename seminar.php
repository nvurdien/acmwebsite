<?php require 'header.php' ?>
<link href='css/rotating-card.css' rel='stylesheet' />
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

<!--Title of page-->
<title>CSUF ACM::Seminar</title>


<div id="header">
<div class="jumbotron text-center" style="background:none; padding-top:40px;"><BR><BR>
  <h1 style="font-family:Open Sans">Seminars</h1>
</div>
</div>
<!--First Section-->
<div class="col-sm-12 section">



  <div class="col-md-4 col-sm-4">
  <div class="card-container"> <!--Card holder-->
     <div class="card"><!--background-->
         <div class="front"> <!--LEAVE THIS DIV-->
           <!--
             <div class="cover">
                 <img src="images/rotating_card_thumb3.png"/> //Add background if wanted
             </div>-->
             <div class="cover">
             </div>
             <div class="user bottom right left top">
                 <img class="img-circle bottom right left top" src="img/acm-desktopcta.png" alt="Seminar image"/><!--headshot image-->
             </div>
             <div class="content">
                 <div class="main">
                     <h3 class="name">Seminar Name</h3><!--Name-->
                     <p class="text-center">Presented by: Sharma Rishabh </p><!--Title-->

                     <h5 class="motto" style="color:black"><span >October 10</span><BR> CS-5</h5><!--Member Since-->
                 </div>
             </div>
          </div> <!-- end front panel -->
          <div class="back">
             <div class="header">
                 <h4 class="text-center">Description</h4><!--Description Header-->
             </div>
             <div class="content">
                 <div class="main">
                     <p class="text-center">About</p><!--Job Description-->
                 </div>
             </div>
             <div class="footer">
                 <div class="social-links text-center">
                   <a href="mailto:"><i class="fa fa-envelope-o"></i></a><!--email-->
                 </div>
             </div>
         </div> <!-- end back panel -->
     </div> <!-- end card -->
  </div> <!-- end card-container -->
  </div><!--end div-->

</div>


<?php require 'footer.php' ?>

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
