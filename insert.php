<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not Connected To Server';
}

if(!mysqli_select_db($con,'registration'))
{
	echo 'Database Not Selected';
}

$case_id = $_POST['case_id'];
$cust_name = $_POST['cust_name'];
$premise_add = $_POST['premise_add'];
$service = $_POST['service'];
$issue = $_POST['issue'];
$issue1 = $_POST['issue1'];
$state = $_POST['state'];
$resolution = $_POST['resolution'];
$evidence = $_POST['evidence'];
$evidence2 = $_POST['evidence2'];
$technical_report = $_POST['technical_report'];

$sql = "INSERT INTO sitevisit (case_id, cust_name, premise_add, service, issue, issue1, state, resolution, evidence, evidence2, technical_report) VALUES ('$case_id','$cust_name','$premise_add','$service','$issue','$issue1','$state','$resolution','$evidence','$evidence2','$technical_report')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'Inserted';
}

header("refresh:2; url=sitevisit.php");

?>