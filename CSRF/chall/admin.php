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
        if($row["priv"] == "Y")
        {
            echo "
                <script>alert('Your flag is wormcon{w1th_csrf_at0_1s_s0_p0ss1bl3_1rb1o3}');
                window.location.replace('dashboard.php');
                </script>
                ";
        }
        else{
            echo "
                <script>
                window.location.replace('dashboard.php');
                </script>
                ";
        }
    }
    else
    {
        echo "
            <script>alert('Something is wrong');window.location.replace('index.php');</script>
            ";

    }
    
}
else{
    
	header("Location: index.php");
}
?>