<?php
 
 class EnrollmentConfig{

    private $localhost = "localhost";
    private $username = "root";
    private $password="";
    private $database="exam";
    private $status;

    public function __construct(){
        $this->status = mysqli_connect($this->localhost,$this->username, $this->password,$this->database);
    }

    function studentEnroll($student_id,$course_id,$enroll_date){
     
        $query= "INSERT INTO enrollment(student_id,course_id,enroll_date) VALUES($student_id,$course_id,$enroll_date)";
        $res = mysqli_query($this->status,$query);
        return $res;
    }

    function deleteEnroll($id){
       $query = "DELETE FROM course WHERE id=$id";
       $res = mysqli_query($this->status,$query);
       return $res;
    }
 }


?>