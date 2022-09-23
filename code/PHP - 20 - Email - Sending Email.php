<!doctype html>
<html>
<head>
 <title>Sending Email Using PHP</title>
 <meta charset="utf-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 </head>
<body>

 
 <h1>email</h1>
 <?php
 
 $emailTo="mail@gmail.com";
 $subject="testing";
 $body="lets check its working or not";
 $headers="From:mail@gmail.com";
     if (mail($emailTo, $subject, $body, $headers)) {
                echo "Mail sent successfully!";
                    } else {
                                echo "Mail not sent!";
                    }
?>
</body>
</html>
  