<?php


header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: application/json");

include'enroll_config.php';

$c1 = new EnrollmentConfig();

if ($_SERVER['REQUEST_METHOD'] == "DELETE") {

    $res = file_get_contents("php://input");
    parse_str($res,$data);
    $id = $data["id"];
    $result = $c1->deleteEnroll($id);

    if($result)
    {
        $arr['status']=' deleted Successfully !';
    }
    else{
        $arr['error']= 'failed to delete  !';
    }
} else {
    $arr['err'] = "Only DELETE method is allowed !!";
}



echo json_encode($arr);
?>