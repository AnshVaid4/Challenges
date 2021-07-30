<!DOCTYPE html>
<head>
    <title>Crypto</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="top">    
<h1>Welcome to the world of cryptography</h1><br>
<p>Cobb came across a safe, containing the flag for this challenge. On the safe it was written <b>"Your old friend Satoshi"</b>. As usual Cobb took Somnacin to initiate the 
    dream, and met Satoshi to get the flag.
    Satoshi told that he had locked the flag in that digital safe and the key to open it has some relation with his block number 691604. He gave the hint 
    to Cobb that the key for this safe is same as that of <b>hash of the block, if it was mined 5 minutes before from the actual time</b>. Oh, I forgot to 
    mention that it's Inception.
</p>
<br>
</div>

<br>
<br>

<div class="left">
</div>
<div class="form">
    <form method="POST" action="#">
        <label><i class="fas fa-user-lock"> Digital Safe</i></label><br>
        <i class="fas fa-key"></i><input type="text" name="address" maxlength="100" placeholder="Please enter the key to open safe and retrieve flag"></input><br><br>
        <button name="submit">Submit</button><br>
        <?php
            if(isset($_POST['submit']) and $_POST['address'] != null)
            {
                $address=htmlspecialchars($_POST['address']);
                // $address=$_POST['address'];
                
                if($address == "39f68317caa4688a65827f65e0e3101b8e9d02f25d949ddb08680a614d777c37")
                {
                    echo "
                    <script>alert('Your flag is CTF{ThiS_is_Y0uR_fl4G}');window.location.replace('index.php');</script>
                    ";
                }
                else
                {        
                    echo "$address is the wrong key to unlock safe";
                }
            }

        ?>
    </form>
</div>

</body>
</html>

