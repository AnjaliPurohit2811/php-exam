<?php


header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: application/json");

include'course_config.php';

$c1 = new CourseConfig();

if ($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

    $res = file_get_contents("php://input");
    parse_str($res,$data);
    $id = $data["id"];
    $result = $c1->courseUpdate($id,$course_name,$description);

    if($result)
    {
        $arr['status']='update Successfully !';
    }
    else{
        $arr['error']= 'failed to update !';
    }
} else {
    $arr['err'] = "Only Update method is allowed !!";
}



echo json_encode($arr);
?>