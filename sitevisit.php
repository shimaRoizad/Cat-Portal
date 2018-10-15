<?php

$result="";

if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='TLS';
$mail->Username='shimachima11@gmail.com'; //bubuh gmail yg kau guna skrng
$mail->Password='shimaroizad1498'; //password untuk gmail kau
$mail->SMTPDebug = 4;

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('arsyadirfan744@gmail.com'); //bubuh gmail yg kau guna skrng
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject='Form Submission: '.$_POST['subject'];
$mail->Body='<h1 align=center>Name: '.$_POST['name'].'<br>Case ID: '.$_POST['case_id'].'<br>Premise: '.$_POST['premise_add'].'<br>Email: '.$_POST['email'].'<br>Services: '.$_POST['service'].'<br>Issue: '.$_POST['issue'].'<br> Issue: '.$_POST['issue1'].'<br> State: '.$_POST['state'].'<br> Resolutions: '.$_POST['resolution'].'<br> Evidence: '.$_POST['evidence'].'<br> Evidence: '.$_POST['evidence2'].'<br>Technical Reports: '.$_POST['technical_report'].'</h1>';

if(!$mail->send()){
$result="something went wrong.please try later.";
}
else{
$result="Thnks".$_POST['name']."for conting us . well gt you back";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>CAT Productivity</title>
<link rel="icon" type="image/png" href="logos.png">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
    box-sizing: border-box;
}

.oval {
  height:100px;
  width: 180px;
  float:left;
  background-color: white;
  border-radius: 50%; 
  opacity: 0.9;
  filter: Alpha(opacity=45);
  border-color: white;}


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

body {
  margin: 0;
  background-color: ;
  background-image: url("tm5.jpg");
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
    background-color: #333;
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



/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
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
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
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

 html, body, #map-canvas {
        height: 100%;
		width: 100%;
		border-color: white;
      }  
 
</style>
</head>
<body>
<center>
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

<center>
<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<div class="gridd">
<div class="oval"> <br><br>Reference Number <h5> <?=$result; ?> </h5> </div>
<div class="oval"> <br><br>DATE: <span id="date"></span></div>
<script>
var D = new Date();
document.getElementById("date").innerHTML = D.toLocaleDateString();
</script>

<div class="oval">  <br><br>TIME: <span id="time"></span></div>
<script>
var T = new Date();
document.getElementById("time").innerHTML = T.toLocaleTimeString();
</script>

<div class="oval">
<div id="map-canvas"></div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
        var panorama;
        // The panorama that will be used as the entry point to the custom
        // panorama set.
        var entryPanoId = null;
        function initialize() {
          // The latlng of the entry point to the Google office on the road.
          var unionOffice = new google.maps.LatLng(43.648984, -79.39140199999997);
          // Set up the map and enable the Street View control.
          var mapOptions = {
            center: unionOffice,
            zoom: 0
          };
          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
          panorama = map.getStreetView();
          // Set up Street View and initially set it visible. Register the
          // custom panorama provider function.
          var panoOptions = {
            position: unionOffice,
            visible: true,
            panoProvider: getCustomPanorama
          };
          panorama.setOptions(panoOptions);
          // Create a StreetViewService object.
          var streetviewService = new google.maps.StreetViewService();
          // Compute the nearest panorama to the Google Sydney office
          // using the service and store that pano ID.
          var radius = 50;
          streetviewService.getPanoramaByLocation(unionOffice, radius,
              function(result, status) {
                console.log("1", arguments);
            if (status == google.maps.StreetViewStatus.OK) {
              // We'll monitor the links_changed event to check if the current
              // pano is either a custom pano or our entry pano.
              google.maps.event.addListener(panorama, 'links_changed', function() {
                  console.log("2", arguments);
                  createCustomLinks(result.location.pano);
              });
              google.maps.event.addListener(panorama, 'position_changed', function() {
                console.log('panorama.getPosition()', panorama.getPosition());
              });
              google.maps.event.addListener(panorama, 'pov_changed', function() {
              });
            }
          });
        }
        function getCustomPanoramaTileUrl(pano, zoom, tileX, tileY) {
          // Return a pano image given the panoID.
          console.log('pana URL', arguments);
          if (pano === 'stairwell'){
            return './images/sm/union-stairwell-0.1.jpg';
          } else if(pano === 'desk') {
            return './images/sm/union-desk-0.1.jpg';
          } else if(pano === 'meetingroom') {
            return './images/sm/union-meetingroom-0.1.jpg';
          }
        }
        function getCustomPanorama(pano) {
          switch (pano) {
            case 'desk':
              return {
                location: {
                  pano: 'desk',
                  description: 'Developers Desk',
                  latLng: new google.maps.LatLng(43.649153, -79.391469)
                },
                links: [],
                // The text for the copyright control.
                copyright: 'Imagery (c) 2010 Google',
                // The definition of the tiles for this panorama.
                tiles: {
                  tileSize: new google.maps.Size(3000, 1500),
                  worldSize: new google.maps.Size(3000, 1500),
                  // tileSize: new google.maps.Size(1024, 512),
                  // worldSize: new google.maps.Size(2048, 1024),
                  // The heading at the origin of the panorama tile set.
                  centerHeading: 105,
                  getTileUrl: getCustomPanoramaTileUrl
                }
              };
              break;
            case 'stairwell':
              return {
                location: {
                  pano: 'stairwell',
                  description: 'UNION',
                  latLng: new google.maps.LatLng(43.649179, -79.391393)
                },
                links: [],
                // The text for the copyright control.
                copyright: 'Imagery (c) 2010 Google',
                // The definition of the tiles for this panorama.
                tiles: {
                  tileSize: new google.maps.Size(300, 300),
                  worldSize: new google.maps.Size(3000, 1500),
                  // tileSize: new google.maps.Size(1024, 512),
                  // worldSize: new google.maps.Size(2048, 1024),
                  // The heading at the origin of the panorama tile set.
                  centerHeading: 105,
                  getTileUrl: getCustomPanoramaTileUrl
                }
              };
              break;
            case 'meetingroom':
              return {
                location: {
                  pano: 'meetingroom',
                  description: 'Meeting Room',
                  latLng: new google.maps.LatLng(43.649141, -79.391396)
                },
                links: [],
                // The text for the copyright control.
                copyright: 'Imagery (c) 2010 Google',
                // The definition of the tiles for this panorama.
                tiles: {
                  tileSize: new google.maps.Size(3000, 1500),
                  worldSize: new google.maps.Size(3000, 1500),
                  // tileSize: new google.maps.Size(1024, 512),
                  // worldSize: new google.maps.Size(2048, 1024),
                  // The heading at the origin of the panorama tile set.
                  centerHeading: 105,
                  getTileUrl: getCustomPanoramaTileUrl
                }
              };
              break;
            default:
              return null;
          }
        }
        function createCustomLinks(entryPanoId) {
          var links = panorama.getLinks();
          var panoId = panorama.getPano();
          switch (panoId) {
            case entryPanoId:
              // Adding a link in the view from the entrance of the building to
              // reception.
              links.push({
                heading: 0,
                description: 'UNION',
                pano: 'stairwell'
              });
              break;
            case 'desk':
              // Adding a link in the view from the entrance of the office
              // with an arrow pointing at 100 degrees, with a text of 'Exit'
              // and loading the street entrance of the building pano on click.
              links.push({
                heading: 195,
                description: 'UNION',
                pano: 'stairwell'
              });
              links.push({
                heading: 260,
                description: 'Meeting Room',
                pano: 'meetingroom'
              });
              break;
              case 'stairwell':
              // Adding a link in the view from the entrance of the office
              // with an arrow pointing at 100 degrees, with a text of 'Exit'
              // and loading the street entrance of the building pano on click.
              links.push({
                heading: 110,
                description: 'Exit',
                pano: entryPanoId
              });
              links.push({
                heading: 195,
                description: 'Developers Desk',
                pano: 'desk'
              });
              break;
              case 'meetingroom':
              // Adding a link in the view from the entrance of the office
              // with an arrow pointing at 100 degrees, with a text of 'Exit'
              // and loading the street entrance of the building pano on click.
              links.push({
                heading: 30,
                description: 'Developers Desk',
                pano: 'desk'
              });
              break;
            default:
              return;
          }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</center>

<div class="grid">
<center>
<div class="column middle">
<link rel = "stylesheet" type="text/css" href ="tm1.css">
  	<form action="" method="post">
	      <div class="col-25">
        <label for="cust_name">Customer Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your name.." style="height:40px" required>
      </div>
    <div class="row">
	<div class="col-75">
	<label for="case_id">Case ID</label>
        <input type="text" id="case_id" name="case_id" placeholder="Your Case ID.." style="height:40px" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="premise_add">Premise Address</label>
      </div>
      <div class="col-75">
		<textarea id="premise_add" name="premise_add" placeholder="Your Address .." style="height:80px"></textarea>
      </div>
    </div>
	 <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email.." style="height:40px" required>
      </div>
	   <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="Your subject.." style="height:40px" required>
      </div>
	
	<div class="row">
      <div class="col-25">
        <label for="issues">Issues</label>
      </div>
      <div class="col-75">
        <select id="issue" name="issue" style="height:40px" required>
	      <option value="none" selected="" disabled="">Select Issues</option>
          <option value="Internal Wiring At Customers Premise" name="issue">Internal Wiring At Customers Premise</option>
          <option value="Customer Behavior" name="issue">Customer Behavior</option>
          <option value="Visit Building Management" name="issue">Visit Building Management</option>
		  <option value="Cable Stolen" name="issue">Cable Stolen</option>
		  <option value="OSHE Issue" name="issue">OSHE Issue</option>
		   <option value="Other" name="issue">Other. (please justify issues)</option>
        </select>
		<input type="text" id="othr" name="issue1" placeholder="Justification.." style="height:40px">
      </div>
    </div>
	
	

</center>


<div class="column side">
<link rel = "stylesheet" type="text/css">
<div class="row">


	<div class="row">
	 <div class="col-25">
	<label for="services">Services</label>
	</div>
	<div class="col-75">
        <select id="service" name="service" style="height:40px" required>
		<option value="none" selected="" disabled="">Select Services</option>
		<option value="Streamxy" name="service">Streamxy</option>
          <option value="Unifi" name="service">Unifi</option>
          <option value="Others" name="service">Others</option>
        </select>
      </div>
    </div>

	<div class="row">
	 <div class="col-25">
	<label for="state"> State </label>
	</div>
	<div class="col-75">
        <select id="state" name="state" style="height:40px" required>
		<option value="none" selected="" disabled="" name="state">Select State</option>
		<option value="perlis" name="state">Perlis</option>
          <option value="Kedah" name="state">Kedah</option>
          <option value="Penang" name="state">Pulau Pinang</option>
		  <option value="Perak" name="state">Perak</option>
		  <option value="Selangor" name="state">Selangor</option>
		  <option value="Kuala Lumpur" name="state">Kuala Lumpur</option>
		  <option value="Negeri Sembilan" name="state">Negeri Sembilan</option>
		  <option value="Melaka" name="state">Melaka</option>
		  <option value="Pahang" name="state">Pahang</option>
		  <option value="Terengganu" name="state">Terengganu</option>
		  <option value="Kelantan" name="state">Kelantan</option>
		  <option value="Johor" name="state">Johor</option>
        </select>
      </div>
    </div>


	    <div class="row">
      <div class="col-25">
	  <label for="resolution">Resolutions</label>
      </div>
      <div class="col-75">
        <select id="resolution" name="resolution" style="height:40px" required>
          <option value="Customer Satisfied with Explaination" name="resolution">Customer Satisfied with Explaination</option>
          <option value="Change CPE" name="resolution">Change CPE</option>
          <option value="Change Internal Wiring" name="resolution">Change Internal Wiring</option>
		  <option value="No Solution/Follow Up With Reply Letter" name="resolution">No Solution/Follow Up With Reply Letter</option>
		  <option value="Customer/Building Management Not At Premise" name="resolution">Customer/Building Management Not At Premise</option>
		  <option value="Pending For Next Visit" name="resolution">Pending For Next Visit</option>
		  <option value="Customer Not Agree With Explaination" name="resolution">Customer Not Agree With Explaination</option>
        </select>
      </div>
    </div>


      <div class="col-25">
        <label for="evidence">Evidence</label>
      </div>
      <div class="col-75">
        <select id="evidence" name="evidence" style="height:40px" required>
          <option value="Picture In SmartPhone" name="evidence">Picture In SmartPhone</option>
          <option value="Email From Flying Squad/SDZ" name="evidence">Email From Flying Squad/SDZ</option>
          <option value="Other" name="evidence">Other. (please justify evidence)</option>
        </select>
		<input type="text" id="othrs" name="evidence2" placeholder="Justification.." style="height:40px">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Technical Reports</label>
      </div>
      <div class="col-75">
        <textarea id="technical_report" name="technical_report" placeholder="Write something.." style="height:130px"></textarea>
      </div>
    </div>
    <div class="row">
	
 <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
    </div>
  </form>
</div>

</div>
</div>

<script>
 
    $('#grid_table').jsGrid({

     width: "auto%",
     height: "auto",

     filtering: true,
     inserting:true,
     editing: true,
     sorting: true,
     paging: true,
     autoload: true,
     pageSize: 10,
     pageButtonCount: 5,
     deleteConfirm: "Do you really want to delete data?",

     controller: {
      loadData: function(filter){
       return $.ajax({
        type: "GET",
        url: "f_data.php",
        data: filter
       });
      },
      insertItem: function(item){
       return $.ajax({
        type: "POST",
        url: "f_data.php",
        data:item
       });
      },
      updateItem: function(item){
       return $.ajax({
        type: "PUT",
        url: "f_data.php",
        data: item
       });
      },


     fields: [
      {
       name: "id",
    type: "text",
    css: 'hide'
      },
      {
       name: "case_id", 
    type: "", 
     
    validate: "required"
      },
      {
       name: "cust_name", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "premise_add", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "service", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "issue", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "state", 
    type: "", 
    
    validate: "required"
      },
	  {
       name: "resolution", 
    type: "", 
     
    validate: "required"
      },
       name: "evidence", 
    type: "", 
     
    validate: "required"
      },
       name: "technical_report", 
    type: "", 
     
    validate: "required"
      },
      {
       type: "control"
      }
     ]

    });

</script>



<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- Footer --> 
</body>
</html>
