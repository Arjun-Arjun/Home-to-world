<html>
<head>
<title>User details</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/w3.css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
    
.mySlides {
	display:none;
}

    .right
    {
    	float:right;
    }

    .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      
  }
    </style>
   

</head>
<body>
<?php
session_start();
if($_SESSION['valid']!='T')
	{
		include('login-check.php');
	}
include('header.php');

?>



<div class="container-fluid">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/banner.png" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Beaches</h3>
          <p>Excellent Holiday Spot</p>
        </div>
      </div>

      <div class="item">
        <img src="images/beach2.jpg" alt="Chania" width="460" height="345">
        
      </div>
    
      <div class="item">
        <img src="images/beach3.jpg" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="images/beach4.jpg" alt="Flower" width="460" height="345">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br>
<div id="footer" style="height:30px;width:100%;">
	<center>Copyright &copy; 2016 My Travel.  </center>
  
</div>

</body>
</html>