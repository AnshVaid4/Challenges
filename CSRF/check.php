<html>
<head>
<link rel="stylesheet" href="loginstyles.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php
error_reporting(0);
session_start();
if($_SESSION['uname'] != null)
{
    include "connection.php";
    $username=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['uname']));
    $query= "select * from loginportal where username= '".$username."'";
    $queryexec=mysqli_query($conn,$query);
    if(mysqli_num_rows($queryexec) == 1)
    {
        $row=mysqli_fetch_array($queryexec);
        if($row["priv"] == "N")
        {?><h1 style="text-align:center;font-family: Lucida Console, Courier New, monospace;padding-top:2em;"><?Php
            echo "You are not an administrator. Only admin can access shell.";?></h1><?php
        }
    }
    else
    {
        echo "
            <script>alert('Something is wrong');window.location.replace('index.php');</script>
            ";

    }
    
}
if($_SESSION['uname'] != null)
{
    include "connection.php";
    $username=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['uname']));
    $query= "select * from loginportal where username= '".$username."'";
    $queryexec=mysqli_query($conn,$query);
    if(mysqli_num_rows($queryexec) == 1)
    {
        $row=mysqli_fetch_array($queryexec);
        if($row["priv"] != "Y")
        {
?>
<div class="top">    
<h1><u>Fill form to become administrator</u></h1><br>
<div class="form">
<form method="GET" action="#">
<label><i class="fa fa-user-circle"> Username</i></label><br>
<input type="text" name="check" maxlength="100" placeholder="Enter the username to give it admin privileges"></input><br><br>
<button name="submit">Submit</button><br>
<a href="dashboard.php">Back to dashboard</a><br>
<?php
}}}
if(isset($_GET['submit']) and $_GET['check'] !=null and ($_GET['check'] == $_SESSION['uname']) and $_SESSION['uname'] == 'management')
{
    include "connection.php";
    $username=mysqli_real_escape_string($conn,htmlspecialchars($_GET['check']));
    $query= "select * from loginportal where username= '".$username."'";
    $queryexec=mysqli_query($conn,$query);

    if(mysqli_num_rows($queryexec) == 1)
    {
        $query= "update loginportal set priv='Y' where username= '".$username."'";
        $queryexec=mysqli_query($conn,$query);
    }
    
        
}
if(isset($_GET['submit']) and $_GET['check'] !=null and ($_GET['check'] == $_SESSION['uname']))
{    
?> <p style="color: red;"><b>You don't have permission to make yourself admin</b></p>

<?php
}
if(isset($_GET['submit']) and $_GET['check'] !=null and ($_GET['check'] != $_SESSION['uname']))
{   
?> <p style="color: red;"><b>You don't have permission to make others admin</b></p><?php
}
?>
</form>
</div>
</div>

<?php
if($_SESSION['uname'] != null)
{
    include "connection.php";
    $username=mysqli_real_escape_string($conn,htmlspecialchars($_SESSION['uname']));
    $query= "select * from loginportal where username= '".$username."'";
    $queryexec=mysqli_query($conn,$query);
    if(mysqli_num_rows($queryexec) == 1)
    {
        $row=mysqli_fetch_array($queryexec);
        if($row["priv"] == "Y")
        {
            
?>

<div class="top">    
<h1><u>CMD</u></h1><br>
<div class="form">
<form method="POST" action="#">
<label><i class="fas fa-terminal"> Command Line</i></label><br>
<input type="text" name="cmd" maxlength="100" placeholder="Enter username here"></input><br><br>
<button name="submit2">Submit</button><br>
<p style="color: red;"><b>Under maintainance</b></p>
<br>
<a href="dashboard.php">Back to dashboard</a>
</form>
</div>
</div>
<?php
}}}
    if(isset($_POST['submit2']) and $_POST['cmd'] != null)
    {
?>
 <br>
 <p><?php 
    $cmd= htmlspecialchars($_POST['cmd']);
    echo "
    <script>alert('$cmd : Under Maintainance');</script>
    ";  }  ?></p>
    


</body>
</html>

<?php


?>