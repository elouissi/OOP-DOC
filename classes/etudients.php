<?php
 include("classes/prof.php");

class students extends persons { 
    public $student_id;
    public $student_class;
    public $student_annees;
    public $student_notes;

    public function __construct($student_id,$student_class, $student_annees, $student_notes){
 
    $this->student_id = $student_id;
    $this->student_class = $student_class;
    $this->student_annees = $student_annees;
    $this->student_notes = $student_notes;
    }

}