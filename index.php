<?php
include("classes/etudients.php");
 
$object_person = new Persons(1,"yassin","yassinelouissi67@gmail.com","0611029272");
$object_students = new students(2,"ayman","2bacSPC4",17);
$object_profs = new professeur(3,"100",1);

echo  "le nom est " . $object_person->person_name  ."<br>";
echo   "dans class " .$object_students->student_class;

?>

