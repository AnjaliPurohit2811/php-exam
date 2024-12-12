<?php

class CourseConfig{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "exam";

    private $status;

    public function __construct(){
        $this->status = mysqli_connect($this->localhost,$this->username, $this->password,$this->database);
    }

    function courseInsert($course_name, $description){
     
        $query = "INSERT INTO course(course_name,description) VALUES($course_name, $description)";
        $res = mysqli_query($this->status, $query);
        return $res;
    }

    function courseUpdate($id, $course_name, $description){

        $query = "UPDATE course SET course_name=$course_name,description=$description WHERE id=$id ";
        $res = mysqli_query($this->status,$query);
        return $res;

    }
}



?>