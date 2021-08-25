
<?php      
    error_reporting(0);
    $host = "db2:3306";  
    $user = "root";  
    $password = 'ThisisS0P3rS3cur3DBPaw0rd';  
    $db_name = "challenge";  
      
    $conn = mysqli_connect($host, $user, $password,$db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
?>  