<?php 

/* Creating an associative array */
$student_one = array("Maths"=>95, "Physics"=>90, 
"Chemistry"=>96, "English"=>93, 
"Computer"=>98); 


/* Looping through an array using for */
echo "<br>Looping using for: <br>"; 
$subject = array_keys($student_one); 
$marks = count($student_one); 
for($i=0; $i < $marks; $i++) { 
    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "<br>"; 
} 
?>