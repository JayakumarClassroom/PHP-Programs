<?php

$visitor_ip = $HTTP_COOKIE_VARS["user_ip"];
$counter = "counter.txt";
$counter_file_line = file($counter);
if(!$vistor_ip)
{
setcookie("user_ip", $REMOTE_ADDR, time()+360000);

$counter_file_line[0]++;

$cf = fopen($counter, "w+");

fputs($cf, "$counter_file_line[0]");

fclose($cf);

}
elseif($vistor_ip != $REMOTE_ADDR)
{

$counter_file_line[0]++;

$cf = fopen($counter, "w+");

fputs($cf, "$counter_file_line[0]");

fclose($cf);

} ?>

