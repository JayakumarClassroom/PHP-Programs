HTML file - File Upload-1.html

<html>
<body>
<form action="fileupload.php"method="post" enctype="multipart/form-data">
Filename:
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>



PHP file - File Upload-1.php


<?php
if (($_FILES["fileToUpload"]["type"] == "image/gif")
  || ($_FILES["fileToUpload"]["type"] == "image/jpeg")
  || ($_FILES["fileToUpload"]["type"] == "image/jpg")
  || ($_FILES["fileToUpload"]["type"] == "image/png" )
  && ($_FILES["fileToUpload"]["size"] < 10000000))
  {
	if ($_FILES["fileToUpload"]["error"] > 0)
	    {
	    echo "Apologies, an error has occurred.";
  	  echo "Error Code: " . $_FILES["fileToUpload"]["error"];
  	  }
	 else
   	 {
                          $fileName = $_FILES["fileToUpload"]["name"]; 
                  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], 	$_FILES["fileToUpload"]["name"]);

	   	echo "<table><tr><td>Client Filename: </td>
		   <td>" . $_FILES["fileToUpload"]["name"] . "</td></tr>";
		echo "<tr><td>File Type: </td>
		   <td>" . $_FILES["fileToUpload"]["type"] . "</td></tr>";
		echo "<tr><td>File Size: </td>
		   <td>" . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb</td></tr>";
		echo "<tr><td>Name of Temporary File: </td>
		   <td>" . $_FILES["fileToUpload"]["tmp_name"] . "</td></tr>";
		echo "</table>";
   	}
  }
else
  {
  echo "Files must be either JPEG, GIF, or PNG and less than 10,000 kb";
  }
?>
