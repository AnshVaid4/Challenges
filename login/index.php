<?php error_reporting(0); session_start(); session_destroy();  ?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="loginstyles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>



<div class="top">    
<h1><u>Login here</u></h1><br>

<div class="form">
    <form method="POST" action="#">
        <label><i class="fas fa-user"> Username</i></label><br>
        <input type="text" name="uname" maxlength="100" placeholder="Enter username here"></input><br><br>
        <label><i class="fas fa-key"> Password</i></label><br>
        <input type="password" name="passwd" maxlength="100" placeholder="Enter password here"></input><br><br>
        <button name="submit">Submit</button><br>
        <?php
            error_reporting(0);
            if(isset($_POST['submit']) and $_POST['uname'] != null and $_POST['passwd'] != null)
            {
                include "connection.php";
                
                $username=mysqli_real_escape_string($conn,htmlspecialchars($_POST['uname']));
                $password=mysqli_real_escape_string($conn,htmlspecialchars($_POST['passwd']));

                $query= "select * from loginportal where username= '".$username."' and password= '".$password."'";
                $queryexec=mysqli_query($conn,$query);

                if(mysqli_num_rows($queryexec) == 1)
                {
                    $row= mysqli_fetch_array($queryexec);
                    session_start();
                    $_SESSION['uname'] = $row["username"];
                    $_SESSION['isadmin'] = $row["priv"];

                    echo "
                        <script>
                        alert('$username successfully logged in');
                        window.open('dashboard.php', '_self');
                        </script>
                    ";
                }

                else
                {
                    
                    echo "Username or password is incorrect";
                }
            }

        ?>
        <br>
        <a href="signup.php">Click here to signup</a>
    </form>
</div>
</div>
</body>
</html>

