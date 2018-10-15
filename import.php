<?php

//import.php

if(!empty($_FILES['csv_file']['name']))
{
 $file_data = fopen($_FILES['csv_file']['name'], 'r');
 fgetcsv($file_data);
 while($row = fgetcsv($file_data))
 {
  $data[] = array(
   'tt_num'  => $row[0],
   'trans_state'  => $row[1],
   'trans_zone'  => $row[2],
   'remark_tt'  => $row[3]
  );
 }
 echo json_encode($data);
}

?>