<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
* {
    box-sizing: border-box;
}

body{
font-family: Helvetica, Arial, sans-serif;
  height: 100%;
  margin: 0;
  background-color: ;
 background-image: url("tm4.jpg"); 
font-family: Arial, Helvetica, sans-serif; }

form.example input[type=text] {
    padding: 9px;
    font-size: 17px;
    border: 2px solid grey;
    float: left;
    width: 74%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 9px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 2px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}

p {
border-width:5px;  
    border-color: black;
	 background-color:;
	 font-size: 20pt;
    border-style: ;
	color: white;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #191f2f;;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 11px;
}

/* Left and right column */
.column.side {
    width: 25%;
    float: left;
    width: 33.33%;
    padding: 6px;
	margin: 0 auto;
}

.column.side:hover {
    transform: scale(1.6); }

/* Middle column */
.column.middle {
    width: 25%;
	float: left;
    width: 33.33%;
    padding: 6px;
    margin: 0 auto;
}

.column.middle:hover {
    transform: scale(1.6); }

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}


/* Slideshow container */
.slideshow-container { max-width: 800px; position: relative;
margin: auto;
}
.mySlides {display: none;}

/* Next & previous buttons */
.prev, .next {cursor: pointer; position: absolute; top: 50%;
width: auto; margin-top: -22px; padding: 16px; color: white;
font-weight: bold; font-size: 18px; transition: 0.6s ease;
border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {right: 0; border-radius: 3px 0 0 3px;}
.prev {left: 0; border-radius: 3px 0 0 3px;}
/* On hover, add a black background color with a little bit seethrough
*/
.prev:hover, .next:hover {background-color: rgba(0,0,0,1);}

/* Caption text */
.text { color: #f2f2f2; font-family: Arial; font-size: 15px;
padding: 8px 12px; position: absolute; bottom: 8px;
width: 100%; text-align: center;}

/* Number text (1/3 etc) */
.numbertext { color: #f2f2f2; font-size: 12px;
padding: 8px 12px; position: absolute; top: 0;}

/* The dots/bullets/indicators */
.dot { cursor:pointer; height: 13px; width: 13px; margin: 0 2px;
background-color: #bbb; border-radius: 50%;
display: inline-block; transition: background-color 0.6s ease;}
.active, .dot:hover { background-color: #717171;}

/* Fading animation */
.fade { -webkit-animation-name: fade; -webkit-animation-duration:
1.5s; animation-name: fade; animation-duration: 1.5s;}

@-webkit-keyframes fade { from {opacity: .4} to {opacity: 1}}
@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

p{ 
background-color: ;
}

color: black;
background-color: #b2b2b2;

text-align: center;

padding: 7px 0px 0px 20px;}

.oval {
  height:150px;
  width: 200px;
  background-color: white;
  border-radius: 50%; }
  
.footer {
    background-color: #f1f1f1;
    padding: 3px;
    text-align: center;
}
</style>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="cxcall.php">Cx Call</a>
  <a href="sitevisit.php">Site Visit</a>
  
   <div class="dropdown">
    <button class="dropbtn">Planner 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="groupplanner.php">Group Planner</a>
      <a href="appoitment.php">Appointment</a>
    </div>
  </div> 
  
    <a href="productivity.php">Productivity</a>
  
   <li style="float:right"><a class="active" href="login.php">Log Out</a></li>
</div>

	
 	  <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
		<p>Hello ! <strong><?php echo $_SESSION['email']; ?></strong></p>
    <?php endif ?> 
</div>

<center>
<article> 
<h2 class="w3-center">&nbsp</h2>
<div class="slideshow-container">
<div class="mySlides fade">
<marquee behavior="scroll" direction="left">
<a href="https://www.google.com/">
<center><img src="duaa.png" style="width: 50%" style="height:50%">
<div class="text"></div>
</marquee>
</div>
 
<div> 
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
<br> 
</article> 


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="row">
  <div class="column side">
    <a href="https://hero.tm.com.my/hero-agent/">
   <h2><img src="hero.png" alt="Paris" width="160" height="160" class="w3-round-xxlarge" style="width:40%"></h2></a>
 </div>

  <div class="column middle">
    <a href="http://km.intra.tm/scoda/dashboard.php">
    <h2><center><img src="scoda.png" alt="Paris" class="w3-round-xxlarge" style="width:40%" width="160" height="160"></h2></a>
  </div>
  
  <div class="column side">
    <a href="http://km.tm.com.my/Pages/BMD/BuildingManagementDatabase_AllBuildingManagement.aspx">
    <h2><center><img src="wise.PNG" alt="Paris" class="w3-round-xxlarge" style="width:40%" width="160" height="160"></h2></a>
  </div>
  
  <div class="column side">
    <a href="https://hero.tm.com.my/hero-agent/">
    <h2><center><img src="tm1.jpg" alt="Paris" class="w3-round-xxlarge" style="width:40%" width="160" height="160"></h2></a>
  </div>
  
  <div class="column middle">
  <a href="http://km.tm.com.my">
    <h2><img src="wise.png" alt="Paris" class="w3-round-xxlarge" style="width:40%" width="160" height="160" align="center"></h2></a>
  </div>
  
  <div class="column side">
    <a href="https://hero.tm.com.my/hero-agent/">
    <h2><center><img src="hero.png" alt="Paris" class="w3-round-xxlarge" style="width:40%" width="160" height="160"></h2></a>
  </div>
</div>
</div>
	
<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
showSlides(slideIndex += n);
}
function currentSlide(n) {
showSlides(slideIndex = n);
}
function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script> 
</body>
</html>
