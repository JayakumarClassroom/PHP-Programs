<?php
$nextWeek = time() + 7 * 24 * 60 * 60;
// 7 days; 24 hours; 60 mins; 60secs
echo 'Now : ' . date('Y-m-d') . "<br><br>";
echo 'Next Week : ' . date('Y-m-d', $nextWeek) . "<br>";
?>