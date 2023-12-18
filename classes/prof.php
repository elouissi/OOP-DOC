<?php
require("person.php");
 class professeur extends persons{ 
    public $student_id;
    public $student_salary;
    public $student_exper;
 

    public function __construct($student_id,$student_salary, $student_exper){
 
    $this->student_id = $student_id;
    $this->student_salary = $student_salary;
    $this->student_exper = $student_exper;
 
    }

}