<?php 

header("Access-Control-Allow-Method : POST");
header("Content-Type : application/json");

include'enrollment_config.php';

$c1 = new EnrollmentConfig();

if($_SERVER['REQUEST_METHOD' == "POST"]){
    $student_id = $_REQUEST['student_id'];
    $course_id = $_REQUEST['course_id'];
    $enrollment_date = $_REQUEST['enrollment_date'];
    
  
   $res =  $c1->studentEnroll($student_id,$course_id,$enrollment_date);
   if($res){
      $arr['status'] = " enrollment successfully!!";
      echo json_encode($arr);
   }else{
      $arr['error'] = "enrollment failed!!";
      echo json_encode($arr);
   }
}
else{
    $arr['err']="Only post method is allowed";
}
echo json_encode($arr);
?>