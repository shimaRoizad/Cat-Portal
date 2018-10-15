<!DOCTYPE html>
<html lang="en">
<head>
<title>CAT Productivity</title>
<link rel="icon" type="image/png" href="logos.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
l 



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
<br /><br />  
  <div class="container" style="width:900px;">  
   <h3 align="center">Ajax Image Insert Update Delete in Mysql Database using PHP</h3>  
   <br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success">Add</button>
   </div>
   <br />
   <div id="image_data">

   </div>
  </div>  
 </body>  
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>

