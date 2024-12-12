<?php 

header("Access-Control-Allow-Method : POST");
header("Content-Type : application/json");

include'course_config.php';

$c1 = new CourseConfig();

if($_SERVER['REQUEST_METHOD' == "POST"]){
    $course_name = $_REQUEST['course_name'];
    $description = $_REQUEST['description'];
    
  
   $res =  $c1->courseInsert($course_name,$description);
   if($res){
      $arr['status'] = "Course insertaion successfully!!";
      echo json_encode($arr);
   }else{
      $arr['error'] = "Course insertaion failed!!";
      echo json_encode($arr);
   }
}
else{
    $arr['err']="Only post method is allowed";
}
echo json_encode($arr);
?>