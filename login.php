

<!DOCTYPE html>
<html lang="en">
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
  background-image: url(".jpg");
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

.column.side {
    width: 30%;
	background-color: #191f2f;
	border-radius: 25px;
	padding: 30px;
	text-align: left;
	color:white;
	width: 500px;
	height: 560px;
	float: right;
	
}

.column.middle {
float: center;
color: white;
clear:both;
    border-radius: 25px;
    padding: 30px; 
    width: 500px;
    height: 500px;
    background-color: #191f2f;
    height: 570px;
    text-align: left;
    background-color: #191f2f;
}

/* Left and right column */
.column.side.satu {
    width: 25%;
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
	  
input#name{ background-image: url("sign/8.png");}
input#mail{ background-image: url("sign/7.png");}
input#phone{ background-image: url("sign/9.png");}
input#psword{ background-image: url("sign/10.png");}
input#cpassword{ background-image: url("sign/11.png");}
 
</style>
</head>
<body>

<div class="topnav">
  <a  href="login.php"> Login </a>
  <a  href="register.php"> Register </a>
</div>

	<title> CAT PRODUCTIVITY </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="logos.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
<!--===============================================================================================-->
</head>
<body>

<form method="POST" action="index.php">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/tm4.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				  <form method="POST" action="connect.php">
				
				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" required placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

			 
					<div class="wrap-input100 validate-input m-b-18"  data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" id="psword" type="password" name="password" required placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
				

					<div class="flex-sb-m w-full p-b-30" >
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login_user" action="index.php">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>