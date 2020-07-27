
<?php
$Restricted_Area='Public'; //Media

switch($Restricted_Area)
{
	case 'Guard':
	echo "Permission Granted";
    break;
    
	case 'Office boy':
	case 'Public':
	case 'Media':
    echo "Permission Denied";
    break;
    
	default:
	echo "visit http://Jayakumars.in";

}
?>
