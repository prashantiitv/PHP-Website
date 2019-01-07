<?php
include 'common.php';
?>

<body>

<?php 
include 'header.php';
?>

  <div class="" style="background-color:#5c1717d4;padding: 40px;">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/caurosel/second.jpg" alt="" style="width:100%; height:80%">
        </div>

        <div class="item">
          <img src="images/caurosel/third.jpg" alt="" style="width:100%; height:80%">
        </div>
    
        <div class="item">
          <img src="images/caurosel/library.jpg" alt="" style="width:100%; height:80%">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br>

  <div class="navbar navbar-inverse" style="background-color:#4c0000e8;margin-bottom:0" >
    <div class="container">    
      <marquee class="marq">39th Convocation iit(ism) Dhanbad</marquee>
    </div>
  </div>
 
  <div class="container">
    <div class="row text-left">
      <div class="col-md-8 col-md-8">
        <div class = "tue">
          <div class="slideshow">
            <div>
              <img src="images/caurosel/library.jpg" alt="" style="width:100%; height:80%">
              <div class="carousel-caption"><p class="black">Planning and Developments</p></div>
            </div>
            <div>
              <img src="images/caurosel/second.jpg" alt="" style="width:100%; height:80%">
              <div class="carousel-caption"><p class="black">Research and consultancy</p></div>
            </div>
            <div>
              <img src="images/caurosel/third.jpg" alt="" style="width:100%; height:80%">
              <div class="carousel-caption"><p class="black">Central Library</p></div>
            </div>
            <div>
              <img src="images/caurosel/library.jpg" alt="" style="width:100%; height:80%">
              <div class="carousel-caption"><p class="black">Computer Centre</p></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-md-6">
        <div class="quicklinks">
          <h3 class="links"> Quick links</h3>
            <marquee id= "marque" direction = "up">
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Placement(CDC)</a></p> 
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Skill India Program</a></p>
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Achievment</a> </p>
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Recruitment@iit(ism)</a></p>
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Placement(CDC)</a></p>
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Skill India Program</a></p>
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Achievment</a></p>
              </div>
              <div onmouseover = 'mouseover()'; onmouseout = 'mouseout()';>
                <p><a style="color:black;" href="#">Recruitment@iit(ism)</a></p>
              </div>
            </marquee> 
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src="script/script.js"></script>

<?php 
include 'footer.php';
?>

</body>
</html>
