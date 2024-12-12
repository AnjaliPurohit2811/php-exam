<?php
header("Access-Control-Allow-Method : GET");
header("Content-Type: application/json");

include'student_config.php';

$c1 = new StudentConfig(); 

if($_SERVER['REQUEST_METHOD']=='GET'){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $res = $c1->selectStudent($name, $email,$phone);
    if($res){
        $arr['msg'] = "read successfully";
    }
    else{
        $arr['err'] = "failed!!!!";
    }
}
else{
    $arr['err'] = "Only get method is allowed";
}




?>