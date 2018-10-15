<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=registration", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':id'   => "%" . $_GET['id'] . "%",
  ':tt_num'   => "%" . $_GET['tt_num'] . "%",
  ':trans_state'   => "%" . $_GET['trans_state'] . "%",
  ':trans_zone'   => "%" . $_GET['trans_zone'] . "%",
  ':remark_ctt'   => "%" . $_GET['remark_ctt'] . "%",
  ':date_called'   => "%" . $_GET['date_called'] . "%",
  ':time_called'   => "%" . $_GET['time_called'] . "%",
  ':snr_reading'   => "%" . $_GET['snr_reading'] . "%",
  ':technical_issue'    => "%" . $_GET['technical_issue'] . "%",
  ':technical_visit'    => "%" . $_GET['technical_visit'] . "%",
  ':technical_provide'    => "%" . $_GET['technical_provide'] . "%",
  ':cust_issue'   => "%" . $_GET['cust_issue'] . "%",
  ':phc_form'   => "%" . $_GET['phc_form'] . "%",
  ':internal_wiring'   => "%" . $_GET['internal_wiring'] . "%",
  ':correct_lov'   => "%" . $_GET['correct_lov'] . "%",
  ':need_contractor'   => "%" . $_GET['need_contractor'] . "%",
  ':remark_cust'   => "%" . $_GET['remark_cust'] . "%",
  ':remark_cat'   => "%" . $_GET['remark_cat'] . "%",
  ':pic'   => "%" . $_GET['pic'] . "%"
 );
 $query = "SELECT * FROM user WHERE id LIKE :id AND tt_num LIKE :tt_num AND trans_state LIKE :trans_state AND trans_zone LIKE :trans_zone AND remark_ctt LIKE :remark_ctt AND date_called LIKE :date_called AND time_called LIKE :time_called AND snr_reading LIKE :snr_reading AND technical_issue LIKE :technical_issue AND technical_visit LIKE :technical_visit AND technical_provide LIKE :technical_provide AND cust_issue LIKE :cust_issue AND phc_form LIKE :phc_form AND internal_wiring LIKE :internal_wiring AND correct_lov LIKE :correct_lov AND need_contractor LIKE :need_contractor AND remark_cust LIKE :remark_cust AND remark_cat LIKE :remark_cat AND pic LIKE :pic ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
  foreach($result as $row)
 { 
  $output[] = array(
   'id'    => $row['id'],   
   'tt_num'  => $row['tt_num'],
   'trans_state'   => $row['trans_state'],
   'trans_zone'   => $row['trans_zone'],
   'remark_ctt'    => $row['remark_ctt'],
   'date_called'    => $row['date_called'],
   'time_called'    => $row['time_called'],
   'snr_reading'    => $row['snr_reading'],
   'technical_issue'   => $row['technical_issue'],
   'technical_visit'   => $row['technical_visit'],
   'technical_provide'   => $row['technical_provide'],
   'cust_issue'  => $row['cust_issue'],
   'phc_form'  => $row['phc_form'],
   'internal_wiring'  => $row['internal_wiring'],
   'correct_lov'  => $row['correct_lov'],
   'need_contractor'  => $row['need_contractor'],
   'remark_cust'  => $row['remark_cust'],
   'remark_cat'  => $row['remark_cat'],
   'pic'  => $row['pic']
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':id'  => $_POST['id'],
  ':tt_num'  => $_POST['tt_num'],
  ':trans_state'  => $_POST['trans_state'],
  ':trans_zone'  => $_POST["trans_zone"],
  ':remark_ctt'    => $_POST["remark_ctt"],
  ':date_called'    => $_POST["date_called"],
  ':time_called'    => $_POST["time_called"],
  ':snr_reading'    => $_POST["snr_reading"],
  ':technical_issue'   => $_POST["technical_issue"],
  ':technical_visit'   => $_POST["technical_visit"],
  ':technical_provide'   => $_POST["technical_provide"],
  ':cust_issue'  => $_POST['cust_issue'],
  ':phc_form'  => $_POST['phc_form'],
  ':internal_wiring'  => $_POST['internal_wiring'],
  ':correct_lov'  => $_POST['correct_lov'],
  ':need_contractor'  => $_POST['need_contractor'],
  ':remark_cust'  => $_POST['remark_cust'],
  ':remark_cat'  => $_POST['remark_cat'],
  ':pic'  => $_POST['pic']
 );

 $query = "INSERT INTO user (id, tt_num, trans_state,trans_zone, remark_ctt, date_called, time_called, snr_reading, technical_issue, technical_visit, technical_provide, cust_issue, phc_form, internal_wiring, correct_lov, need_contractor, remark_cust, remark_cat, pic) VALUES (:id, :tt_num, :trans_state, :trans_zone, :remark_ctt, :date_called, :time_called, :snr_reading, :technical_issue, :technical_visit, :technical_provide, :cust_issue, :phc_form, :internal_wiring, :correct_lov, :need_contractor, :remark_cust, :remark_cat, :pic)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':tt_num' => $_PUT['tt_num'],
  ':trans_state' => $_PUT['trans_state'],
  ':trans_zone' => $_PUT['trans_zone'],
  ':remark_ctt'   => $_PUT['remark_ctt'],
  ':date_called'   => $_PUT['date_called'],
  ':time_called'   => $_PUT['time_called'],
  ':snr_reading'   => $_PUT['snr_reading'],
  ':technical_issue'  => $_PUT['technical_issue'],
  ':technical_visit'  => $_PUT['technical_visit'],
  ':technical_provide'  => $_PUT['technical_provide'],
  ':cust_issue' => $_PUT['cust_issue'],
  ':phc_form' => $_PUT['phc_form'],
  ':internal_wiring' => $_PUT['internal_wiring'],
  ':correct_lov' => $_PUT['correct_lov'],
  ':need_contractor' => $_PUT['need_contractor'],
  ':remark_cust' => $_PUT['remark_cust'],
  ':remark_cat' => $_PUT['remark_cat'],
  ':pic' => $_PUT['pic']
 );
 $query = "
 UPDATE user 
 SET  tt_num = :tt_num,
 trans_state = :trans_state,
 trans_zone = :trans_zone, 
 remark_ctt = :remark_ctt,
 date_called = :date_called,
 time_called = :time_called,
 snr_reading = :snr_reading, 
 technical_issue = :technical_issue,
 technical_visit = :technical_visit,
 technical_provide = :technical_provide,
 cust_issue = :cust_issue,
 phc_form = :phc_form,
 internal_wiring = :internal_wiring,
 correct_lov = :correct_lov,
 need_contractor = :need_contractor,
 remark_cust = :remark_cust,
 remark_cat = :remark_cat,
 pic = :pic
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

?>