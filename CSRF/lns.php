<?php
error_reporting(0);
session_start(); 
if($_SESSION['uname'] == null)
{
	header("Location: index.php");
}
else{
echo"
<script>
window.location.replace('dashboard.php');
</script>
";
}
?>