<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

// get posted data into local variables

$tippername = Trim($_POST[tippername]); 
$eventurl = Trim($_POST[eventurl]); 
$EmailTo = "simon <simon@eyetoi.net>";
$EmailTo1 = "tangohub <simon@tangohub.co.uk>";
$Subject = "TANGOHUB EVENT TIP";

// validation
$validationOK=true;
if (Trim($eventurl)=="") $validationOK=false;
if (!$validationOK) {
  exit;}

// prepare email body text
$Body .= "$eventurl - tipped by $tippername";

// send email 
$success = mail($EmailTo1, $Subject, $Body, "From: $Name <$EmailFrom>");

			mail($EmailTo, $Subject, $Body, "From: $Name <$EmailFrom>");

// redirect to success page 
if ($success){print "<meta http-equiv=\"refresh\" content=\"0;URL=/thank-you-for-your-input/\">";}
else{print "<meta http-equiv=\"refresh\" content=\"0;URL=/uh-oh-something-happened/\">";}

 // send copy of email to visitor
//mail("$Name <$EmailFrom>", "eyetoi have received your message '$Subject'", 
//"You wrote: $Message", "From: eyetoi <info@eyetoi.net>");


?>

</body>
</html>
