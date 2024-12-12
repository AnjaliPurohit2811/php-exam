<?php
header("Access-Control-Allow-Methods : POST");
header("Content-Type : application/json");

include'student_config.php';

$c1 = new StudentConfig();

if($_SERVER['REQUEST_METHOD' == "POST"]){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
  
   $res =  $c1->studentInsert($name,$email,$phone);
   if($res){
      $arr['status'] = "student insertaion successfully!!";
      echo json_encode($arr);
   }else{
      $arr['error'] = "student insertaion failed!!";
      echo json_encode($arr);
   }
}
else{
    $arr['err']="Only post method is allowed";
}
echo json_encode($arr);


?>