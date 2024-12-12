<?php

class StudentConfig{
    private $localhost="localhost";
    private $username = "root";
    private $password = "";
    private $database = "exam";
    private $status;

    public function __construct(){
        $this->status = mysqli_connect($this->localhost, $this->username,$this->password,$this->database);
    }

     function studentInsert($name, $email, $phone){

        $query = "INSERT INTO student(name, email, phone) VALUES('$name', '$email', $$phone)";
        $res = mysqli_query($this->status, $query);
        return $res;
    }

     function selectStudent($name,$email, $phone){
       $query = "SELECT * FROM student WHERE email = $email ";
       $res = mysqli_query($this->status, $query);
       return $res;
    }

}
?>