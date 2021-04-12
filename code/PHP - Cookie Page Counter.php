<?php
if (!isset($_COOKIE['kookie'])) 
{
	$pagecount=0;
	setcookie("kookie",$pagecount);
	echo "This is the first time u have accessed this page. <br>";
	echo "A cookie was sent to u & stored in ur computer";
}
else
{
	$pagecount = ++$_COOKIE['kookie'];
	setcookie("kookie",$pagecount);
	echo "<center><font size=10 color = red> view count:".$_COOKIE['kookie'];
	//setcookie("kookie",time()-1);
}
?> 
