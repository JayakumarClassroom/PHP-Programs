<?php 
/* First method to create an associate array. */
$student_one = array(
    "Maths"=>95,
    "Physics"=>90, 
    "Chemistry"=>96, 
    "English"=>93, 
    "Computer"=>98
); 

/* Second method to create an associate array. */
$student_two["Maths"] = 95; 
$student_two["Physics"] = 90; 
$student_two["Chemistry"] = 96; 
$student_two["English"] = 93; 
$student_two["Computer"] = 98; 

/* Accessing the elements directly */
echo "Marks for student one is:<br>"; 
echo "Maths     : " . $student_two["Maths"], "<br>"; 
echo "Physics   : " . $student_two["Physics"], "<br>"; 
echo "Chemistry : " . $student_two["Chemistry"], "<br>"; 
echo "English   : " . $student_one["English"], "<br>"; 
echo "Computer  : " . $student_one["Computer"], "<br>"; 
?>