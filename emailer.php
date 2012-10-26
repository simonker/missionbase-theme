<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

// get posted data into local variables
$EmailFrom = Trim($_POST[emailfrom]); 
$EmailTo = "simon <hello@missionbase.co.uk>";
$Name = Trim($_POST[name]); 
$Subject = "CONTACT FORM MISSIONBASE";
$Message = Trim($_POST[postcontent]);
$website = Trim($_POST[webaddress]);
$eventname = Trim($_POST[eventname]);
$comments = Trim($_POST[comments]);
$eventdate = Trim($_POST[eventdate]);

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($Message)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/uh-oh-something-happened/\">";
  exit;}

// prepare email body text
$Body .= "website-, $website,<br/> content body -, $Message,<br/> event name -, $eventname,<br/> other comments -, $comments,<br/> event date -, $eventdate,";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: $Name <$EmailFrom>");

// redirect to success page 
if ($success){print "<meta http-equiv=\"refresh\" content=\"0;URL=/thank-you-for-your-input/\">";}
else{print "<meta http-equiv=\"refresh\" content=\"0;URL=/uh-oh-something-happened/\">";}




?>

</body>
</html>
