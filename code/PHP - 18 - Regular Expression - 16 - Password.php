<?php
$password = 'abcDeF1#';
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
if(preg_match($pattern, $password)){
   echo "Password strength is OK";
} else {
   echo "Password is not strong enough";
}
   
   
?>