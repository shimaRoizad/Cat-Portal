<html>  
    <head>  
        <title>CAT Productivity</title>  
		
  <link rel="icon" type="image/png" href="logos.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  
  
  
  <style>
  .hide
  {
     display:none;
  }
  
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
  background-image: url("tm4.jpg");
}

p {
border-width:5px;  
    border-color: black;
	 background-color: lightgrey;
    border-style: ;
}

h2{ color: white; }

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

/* Left and right column */
.column.side {
    width: 25%;
	opacity: 0.9;
	float right;
  filter: Alpha(opacity=45);
}

/* Middle column */
.column.middle {
float: left;
color: white;
    border-radius: 25px;
    padding: 15px; 
    width: 540px;
    height: 900px;
    text-align: left;
    background-color: #252b39;
	opacity: 0.9;
  filter: Alpha(opacity=45)
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

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  width: 80%;
  text-align: left;
  color: black;
  background-image: url(".jpg");
  background-color: #DCDCDC;
  padding: 20px;
} 

.fc th,
.fc td {
	border-style: solid;
	border-width: 1px;
	border-color: black;
	padding: 0;
	vertical-align: top;
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
  
   <li style="float:right"><a class="active" href="login.html">Log Out</a></li>
</div>
	
        <div class="container">  
   <br />
   <div class="table-responsive"> 
   <div class="jsgrid-table">
    <h2 align="center"> LIVE TABLE CXCALL</h2><br />
	
		
   <br />
   <form id="upload_csv" id="grid_table" method="post" enctype="multipart/form-data">
   <h3 align="center">Import CSV File into Jquery Datatables using PHP Ajax</h3>
   <br />
   <form id="grid_table" method="post" enctype="multipart/form-data">
   
    <div class="col-md-3">
     <br />
     <label>Add More Data</label>
    </div>  
				
				
                <div class="col-md-4">  
                   <input type="file" name="csv_file" id="csv_file" accept=".csv" style="margin-top:14px;" />
                </div>  
                <div class="col-md-5">  
                    <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />
                </div>  
                <div style="clear:both"></div>
   </form>
   <br />
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered" id="data-table">
	   <div id="grid_table">
    </table>
   </div>
  </div>  
	
 
	

<script>

$(document).ready(function(){
 $('#upload_csv').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"import.php",
   method:"POST",
   data:new FormData(this),
   dataType:'json',
   contentType:false,
   cache:false,
   processData:false,
   success:function(jsonData)
   {
    $('#csv_file').val('');
    $('#data-table').DataTable({
     data  :  jsonData,
     columns :  [
      { data : "tt_num" },
      { data : "trans_state" },
      { data : "trans_zone" },
      { data : "remark_tt" }
     ]
    });
   }
  });
 });
});

</script>
	
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
        url: "fetch_data.php",
        data: filter
       });
      },
      insertItem: function(item){
       return $.ajax({
        type: "POST",
        url: "fetch_data.php",
        data:item
       });
      },
      updateItem: function(item){
       return $.ajax({
        type: "PUT",
        url: "fetch_data.php",
        data: item
       });
      },
      deleteItem: function(item){
       return $.ajax({
        type: "DELETE",
        url: "fetch_data.php",
        data: item
       });
      },
     },

     fields: [
      {
       name: "id",
    type: "text",
    css: 'hide'
      },
      {
       name: "tt_num", 
    type: "", 
     
    validate: "required"
      },
      {
       name: "trans_state", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "trans_zone", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "remark_ctt", 
    type: "", 
     
    validate: "required"
      },
	  {
       name: "date_called", 
    type: "text", 
     
    validate: "required"
      },
	  {
       name: "time_called", 
    type: "text", 
    
    validate: "required"
      },
	  {
       name: "snr_reading", 
    type: "text", 
     
    validate: "required"
      },
      {
       name: "technical_issue", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "technical_visit", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "technical_provide", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "cust_issue", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "phc_form", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "internal_wiring", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "correct_lov", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "need_contractor", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "Yes", Id: 'yes' },
     { Name: "No", Id: 'no' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },
	  {
       name: "remark_cust", 
    type: "text", 
     
    validate: "required"
      },
	  {
       name: "remark_cat", 
    type: "text", 
     
    validate: "required"
      },
	  {
       name: "pic", 
    type: "text", 
     
    validate: "required"
      },
      {
       type: "control"
      }
     ]

    });

</script>