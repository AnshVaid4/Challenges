
<html>
<body bgcolor="black">
<div class="head">
<?php    include("header.php");   ?>
</div>
<div class="main">
<div class="search">
<form action="index.php" method="POST">
    <label style="color:red;font-size:200%;"><b><u>Search anything here:</u></b></label><input type="text" name="file" size="25" style="font-size:25;"><br><br><br>

</form>
</div>
<div class="password">
<form action="index.php" method="POST">
    <label style="color:red;font-size:200%;"><b>Username   </b></label><br><input type="text" name="uname" size="26" style="font-size:25;"><br><br>
    <label style="color:red;font-size:200%;"><b>Password  </b></label><br><input type="password" name="passwd" size="26" style="font-size:25;"><br><br><br>
    <input type="submit" name="sub"/>
</form>
</div>
</div>

<?php  
$pic = array("download.jpg","download1.jpg","download2.jpg","download3.jpg","download4.jpg","download5.jpg","download6.jpg","download7.jpg","download8.jpg","download9.jpg","download10.jpg");  
shuffle($pic);  
?>  
  <!-- images credits https://wallpaperaccess.com/inception -->
<?php  
	for( $i = 0; $i < 1; $i++)  
	      echo "<li style=\"display: inline;\"> 
                    <center><img src=\"$pic[$i]\"  height=\"1000\" width=\"100%\"> </center>
                    </li>";  
   
?>  
<br>




</body>
</html>

<?php
	if(isset($_POST['sub']))
	{
		$uname=$_POST['uname'];
		$passwd=$_POST['passwd'];
		$uname=filter_var($uname, FILTER_SANITIZE_STRING);
		if ( strpos($uname,'%2F')  == false and strpos($uname,'.')  == false and strpos($uname,'%2F')  == false and strpos($uname,'%23')  == false  and strpos($uname,'#')  == false and strpos($uname,'=')  == false and strpos($uname,'%3D')  == false )
		{
			$passwd=filter_var($passwd, FILTER_SANITIZE_STRING);
			if ( strpos($passwd,'%2F')  == false and strpos($passwd,'.')  == false and strpos($passwd,'%2F')  == false and strpos($passwd,'%23')  == false  and strpos($passwd,'#')  == false and strpos($passwd,'=')  == false and strpos($passwd,'%3D')  == false )
			{
				if($uname == "theHarvester" and $passwd == "password")
				{
					echo "<script>alert('Your flag is: VULNCON{Y0u_Fin@l1y_SOlv3D_iT}');</script>";
				}
			}
		}
		
	}

?>

<?php


if ( strpos($_POST['file'],'%2F')  !== false  || strpos($_POST['file'],'%2f') !== false)
{

	if ( strpos($_POST['file'],'%2F')  !== false )
	{
         $file = str_replace("%2F","/",$_POST['file']);
	}

	if ( strpos($_POST['file'],'%2f') !== false)
	{
         $file = str_replace("%2f","/",$_POST['file']);
	}
       
	$info=file_get_contents($file);
	$info=base64_encode($info);
	echo "<pre> <font color=#000000 size=2>$info</font> </pre>";
	$mask=base64_encode("https://www.google.com/search?sxsrf=ALeKk012R-roownDNjnk_svidk7mepW4Bg%3A1614192100678&source=hp&ei=5J02YLeLJ8ew9QPZ0p-QBw&iflsig=AINFCbYAAAAAYDar9Lk9Sih5ereJyUXgx_2epSB0l1dy&q=../../../../etc/passwd&oq=../../../../etc/passwd&gs_lcp=Cgdnd3Mtd2l6EAMyCwguELEDEJECEJMCMgcILhCxAxBDMgQIABBDMgQIABBDMgcIABCxAxBDMgUIABCxAzIHCC4QsQMQQzIECAAQQzIECAAQQzIECAAQQzoHCCMQ6gIQJzoECCMQJzoFCAAQkQI6BggAEAoQQzoICAAQsQMQgwE6CAgAELEDEJECOgIIADoFCC4QsQNQwyZYkS1gkC9oAXAAeACAAcYBiAGbB5IBAzAuNZgBAKABAaoBB2d3cy13aXqwAQo&sclient=gws-wiz&ved=0ahUKEwi3jYiWloPvAhVHWH0KHVnpB3IQ4dUDCAc&uact=5");	
	echo "<p> <font color=#7D4E43 size=\"7\">Expected result can be found here => $mask</font> </p>";
	include("index.php");
	
}
else
{
	$file = str_replace("../","", $_POST['file']);
	$file = str_replace("%2F","", $_POST['file']);
        $file = str_replace("%2f","", $_POST['file']);
	$info=base64_encode("https://www.google.com/search?sxsrf=ALeKk012R-roownDNjnk_svidk7mepW4Bg%3A1614192100678&source=hp&ei=5J02YLeLJ8ew9QPZ0p-QBw&iflsig=AINFCbYAAAAAYDar9Lk9Sih5ereJyUXgx_2epSB0l1dy&q=$file&oq=$file&gs_lcp=Cgdnd3Mtd2l6EAMyCwguELEDEJECEJMCMgcILhCxAxBDMgQIABBDMgQIABBDMgcIABCxAxBDMgUIABCxAzIHCC4QsQMQQzIECAAQQzIECAAQQzIECAAQQzoHCCMQ6gIQJzoECCMQJzoFCAAQkQI6BggAEAoQQzoICAAQsQMQgwE6CAgAELEDEJECOgIIADoFCC4QsQNQwyZYkS1gkC9oAXAAeACAAcYBiAGbB5IBAzAuNZgBAKABAaoBB2d3cy13aXqwAQo&sclient=gws-wiz&ved=0ahUKEwi3jYiWloPvAhVHWH0KHVnpB3IQ4dUDCAc&uact=5");	
	echo "<p> <font color=#7D4E43 size=\"7\">Expected result can be found here => $info</font> </p>";
	include("index.php");

}
?>







