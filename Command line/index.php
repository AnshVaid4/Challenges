
<html>
<body bgcolor="#add8e6">
<font size="6" color="	#000000">
<img style="margin-top:-90px;" src="who.jpeg" width="100%" height="700">
<div class="head">
<u><center><h1 style="margin-top:-620px;font-size:80px; color:red;">Challenge Name</h1></center></u>
</div>
<form action="index.php" method="POST" style="margin-top:520px;">
   <label style="font-size:40px;">Whois: </label> <input type="text" name="domain" size="40" height="60" style="font-size:25px;">
</form>
<p style="font-size:25px;margin-top:-20px;">Example: <u>abc.com</u></p>
<pre>

</body>
</html>
<?php


if ( strpos($_POST['domain'],'%7C')  !== false )
{
	$file = str_replace("%7C","|",$_POST['domain']);
	$target = $file;
$substitutions = array(
        '&&' => '',
        ';' => '',
	'|' => '',
	'||' => '',
	'#' => '',
	'\'' => '',
        '%27' => '',
	'%23' => '',
    ); 
$target = str_replace( array_keys( $substitutions ), $substitutions, $target ); 
    system("/usr/bin/whois " . $target);
}
else
{
$target = $_POST["domain"];
$substitutions = array(
        '&&' => '',
        ';' => '',
	'|' => '',
	'||' => '',
	'#' => '',
	'\'' => '',
        '%27' => '',
	'%23' => '',
    ); 
$target = str_replace( array_keys( $substitutions ), $substitutions, $target ); 
    system("/usr/bin/whois " . $target);
}
 ?>
</pre>
