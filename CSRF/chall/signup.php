<?php error_reporting(0); session_start(); session_destroy(); ?>
<!DOCTYPE html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="loginstyles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>



<div class="top">    
<h1><u>Signup here</u></h1><br>

<div class="form">
    <form method="POST" action="#">
        <label><i class="fas fa-user"> Username</i></label><br>
        <input type="text" name="uname" maxlength="100" placeholder="Enter username here"></input><br><br>
        <label><i class="fas fa-key"> Password</i></label><br>
        <input type="password" name="passwd" maxlength="100" placeholder="Enter password here"></input><br><br>
        <label><i class="fas fa-key"> Retype password</i></label><br>
        <input type="password" name="passwd2" maxlength="100" placeholder="Enter confirmation password here"></input><br><br>
        <label><i class="fas fa-envelope"> Email</i></label><br>
        <input type="email" name="email" maxlength="100" placeholder="Enter email here"></input><br><br>
        <button name="submit"><i class="fas fa-lock"> Submit</i></button><br>
        <?php
            if(isset($_POST['submit']) and $_POST['uname'] != null and $_POST['passwd'] != null and $_POST['email'] != null and $_POST['passwd2'] != null)
            {
                error_reporting(0);
                include "connection.php";

                $username= mysqli_real_escape_string($conn, htmlspecialchars($_POST['uname']));
                $password= mysqli_real_escape_string($conn, htmlspecialchars($_POST['passwd']));
                $password2= mysqli_real_escape_string($conn, htmlspecialchars($_POST['passwd2']));
                $email= mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));

                if("$password" === "$password2")
                {
                    $Query = "SELECT * FROM loginportal WHERE username=? LIMIT 1";
                    $stmt = $conn->prepare($Query);
                    $stmt->bind_param('s', $username);
                    $stmt->execute();
                    $result = $stmt->get_result(); 
                    $userCount = $result->num_rows;
                    $stmt->close();
                    if ($userCount > 0){
                        ?>
                        <p style="color:red;"><b><?php echo $username;?> already registered</b></p>
                        <?php  
                    }
                    else
                    {
                        $sql = 'INSERT INTO loginportal (username, password, email, priv) VALUES (? ,? ,? ,?)';
                        $stmt = $conn->prepare($sql);
                        $priv = "N";
                        $stmt->bind_param('ssss', $username, $password, $email, $priv);
                        
                        if ($stmt->execute()){

                        echo "
                            <script>
                            alert('$username registered! You are ready to login.');
                            window.open('index.php', '_self');
                            </script>
                        ";
                    }
                    }
                }
                else
                {?>
                    <p style="color:red;"><b><?php echo "Both the passwords should be same";?></b></p>
                    <?php
                }
            }
            else
            {?>
            <p style="color:red;"><b><?php echo "Fill all fields";?></b></p>
            <?php
            }

        ?>
    </form>
</div>
</div>
</body>
</html>

