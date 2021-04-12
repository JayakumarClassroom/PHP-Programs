<?php
$nextWeek = time() + 7 * 24 * 60 * 60;
// 7 days; 24 hours; 60 mins; 60secs
echo 'Now: ' . date('Y-m-d') . "\n";
echo 'Next Week:' . date('Y-m-d', $nextWeek) . "\n";
?>