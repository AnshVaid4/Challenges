<!DOCTYPE html>
<head>
    <title>Crypto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="top">    
<h1>Welcome to the world of cryptography<h1><br>
<h3>Satoshi has a digital safe having a crypto wallet and flag for this level in it. He has lost the key of that safe, but he knows that the key of the safe is 25-bytes bitcoin address of the
    wallet present in safe. He goes to bed and try to find that key in his dream but encounters a cipher and another key. Would he be successfull to reach the key of digital safe with the help of key 
    he found in dream? <b>Remember it's Inception of cryptography</b>
</h3>
<br>
<div class="key">
Key: MIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAtTAdzRqTU6hfaxUWhZbxr2gKhHpHs6T0OaOKk6wiM4//2PNHk+zx9QnRIOs0fX+VPDXwBKeIhhmNmiYiUIEbD4/ulN5kBU2FMQorTghv2ZIeCEkiKgPQ+yfiRC1YZPY649iwM+7DpJ9DvVBtJw6x2aeswdI82/6o7+k3xkq53JjTTwFkax77EtSmt45TTsfueNk7DSqBW7sSnk3c2UurdGjAjw8PUYtEOxFOajKNtMem/f1Eau6fTLBXgiq0ky4rQHiZEE90l2R4MzemfO3mEpmVs7BJAD8fbeOTZszrfXnmrXYgwleDiudGeB56F8KiX1qj7JIx7LSo0Q4VesJxO7SwAvksvpIKT/wf1OCfXKz78C5G0uxAZBBhI85XPbDDC2gKnNBFpSdODiokO/EONCTRms3ska3AkRFYP5kRTJhjB8c+55N6oN5i5GalgdyHe/0UHeL57PuHuWqrV4s1u5bSVOqYBhxqtykDMXhPzduIkDuJFMvSsVxL8IDBqPV9AgMBAAE=<br><br>
Cipher: <p>h6dVaUccduSY14Q8qmlWbh62vrUFbGXZWU7TTi/MmyKGnu29tQdoUkzO2sA6pV6bfDUDbGENM457d/JBU1KO0a4Fpt8YBZDLSbsq+AZHDHAGpbiC5JMkidTwtjkdxCFxiBH7pqS9ecFaTXc+tJ0/OuzEmO7miYKyQPAWeeYJUjjFKYXxSm+D0d8aZVqttpi1toSC0lBGI7+3KzIn6zBN6aEYSCe2Z5zge80QyaRWGKmtpyupyb1zdSvnKvxZAOChEPuLhKcuvIVu7RUVNQWSKBy+Z/QlAHjLwr9slvsbnxpG9jX4U7PiUxK/TasZUfzik0A5Fn2k1cQtsOgIhfVJ8ohn0Y1Rx7M4rOERL8ztMJ9VTYQfUzkTb2ubNXq1Dbg9650dUfj5Oz/3dbWnUsRtfCxupiim3ZV6xICVDDKH0VEVPimUI5dBGuuREgjiAQIxsrLCezXU7LvqyHZl6KsZD9/be9kT5Jsd7JWv1vFJMK+mq76IRKm5HoQieukGI/Pk</p>
</div>
</div>

<br>
<br>
<center><img src="image.PNG" height="800px" width="1100px"></center>

<div class="left">
</div>
<div class="form">
    <form method="POST" action="#">
        <label>Key of safe</label><br>
        <input type="text" name="address" maxlength="50"></input><br><br>
        <button name="submit">Submit</button> 
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['submit']) and $_POST['address'] != null)
{
    $address=htmlspecialchars($_POST['address']);
    // $address=$_POST['address'];
    if($address == "007f9db50a2e6b134b5b776a70131cbefd27ec35ffefd9b46d")
    {
        echo "
        <script>alert('Your flag is CTF{ThiS_is_Y0uR_fl4G}');window.location.replace('index.php')</script>
        ";
    }
    else
    {
        echo "
        <script>window.location.replace('index.php');</script>
        ";
    }
}
?>