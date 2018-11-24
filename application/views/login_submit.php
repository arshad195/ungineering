<?php
    session_start();
    
    $hostname = "localhost";
    $username = "root";
    $db_password = "12345678";
    $database = "ungineering";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
    $flag=0;
    while ($row=mysqli_fetch_array($result)){
        if($row['email']==$email && $row['password']==$password){
            $flag=1;
            echo "hello" . $row['name'];
            echo "<a href='dashboard.php'>click here </a>";
            //setcookie('email',$email);
            $_SESSION['email']=$email;
            break;
        }       
    }
    if($flag==0){
        echo "failed";
    }
     
    
    mysqli_close($conn);    
?>
