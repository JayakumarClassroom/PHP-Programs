<?php 

/* Creating an associative array */
$student_one = array("Maths"=>95, "Physics"=>90, 
"Chemistry"=>96, "English"=>93, 
"Computer"=>98); 


/* Looping through an array using foreach */
echo "Looping using foreach: <br>"; 
foreach ($student_one as $subject => $marks){ 
    echo "Student one got ".$marks." in ".$subject."<br>"; 
} 

?>