<!DOCTYPE html>
<html lang="en">
<head>
<title>CAT Productivity</title>
<link rel="icon" type="image/png" href="logos.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 9px;
    font-size: 18px;
    border: 2px solid grey;
    float: left;
    width: 74%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
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

body{
font-family: Arial, Helvetica, sans-serif;
  height: 100%;
  margin: 0;
  background-color: ;
 background-image: url("tm4.jpg"); 
}

p {
border-width:5px;  
    border-color: black;
	 background-color: lightgrey;
    border-style: ;
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
    padding: 25px;
}

/* Left and right column */
.column.side {
    width: 25%;
    float: right;
    width: 33.33%;
    padding: 5px;
}

/* Middle column */
.column.middle {
    width: 50%;
	float: left;
    width: 33.33%;
    padding: 5px;

}

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

.navbar {
    overflow: hidden;
    background-color: #191f2f;
    font-family: Times New Roman, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 15px;
    color: white;
	background-color: #191f2f;
    text-align: center;
    padding: 15px 16px;
	 font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
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
    padding: 15px 16px;
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
background-color:  #ccccff; 
}

footer {
float: center;
clear: both;
color: black;
background-color: #b2b2b2;
height: 50px;
text-align: center;
padding: 16px 16px;
padding: 7px 0px 0px 20px;}

.grid-container {
  display: grid;
  grid-column-gap: 60px;
  grid-row-gap: 50px;
  grid-template-columns: auto auto auto;
  float: center;
  padding: 10px;
}
.grid-item {
  background-color:  #deb887;
  color: black;
  border: 2px solid rgba(0, 0, 0, 0.8);
  padding: 45px;
  font-size: 26px;
  text-align: center;
  height: 100%;
  width: 90%;

}

.oval {
  height:150px;
  width: 200px;
  background-color: white;
  border-radius: 50%; }
  
.rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 150px;
    height: 50px;    
} 

#mydiv {
    position: absolute;
    z-index: 9;
    background-color: #f1f1f1;
    text-align: center;
    border: 1px solid black;
}

#mydivheader {
    padding: 10px;
    cursor: move;
    z-index: 10;
    background-color: #deb887;
    color:
} 
 
</style>

<body onload="startTime()">

<link rel = "stylesheet" type="text/css" href = "tm.css">
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
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Hello ! <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>	


<br>
<div class="column">
&nbsp &nbsp <img src="user3.jpg" style="width:190px;height:170px;border-radius: 35px;">  &nbsp &nbsp &nbsp &nbsp

<div id="mydiv">
  <div id="mydivheader">TimeStamp</div>
  <br>
  <div id="txt"></div>
   <p></p>
  <p></p>
<p> 
  <?php
// Return current date from the remote server
 $today = date("d/m/Y");
echo $today;
?> 
</p>
 
</div>
</div>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>


<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>


<center>
<link rel = "stylesheet" type="text/css" href = "tm.css">
<br><br><br><br> <br><br><br><br> <br><br><br>
<div class="columnn">
<div class="grid-container">

  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div> 

  <div class="grid-item">1 <br>TASK ASSIGNED</div>
  <div class="grid-item">2 <br>IN PROGRESS</div>
  <div class="grid-item">3 <br>CLOSED</div>  
  <div class="grid-item">4 <br>TASK ASSIGNED</div>
  <div class="grid-item">5 <br>IN PROGRESS</div>
  <div class="grid-item">6 <br>CLOSED</div>  
  <div class="grid-item">7 <br>TASK ASSIGNED</div>
  <div class="grid-item">8 <br>IN PROGRESS</div>
  <div class="grid-item">9 <br>CLOSED</div>  
</div>
</center>


<!-- Footer --> 
</body>
</html>
	 