
<?php
include_once 'db.php';
session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

$_SESSION['email']=$email;



	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {






$query = "SELECT * FROM faculty_email WHERE fmail = '$email' AND password = '$pass'";
        $user = mysqli_query($conn, $query);
        if (mysqli_num_rows($user) == 1) {
            
            
            
           header("refresh:1;url=outputphp.php");
           
        }
        else
        {
            echo 'your credentials are wrong';
            header("refresh:4; url=start.php");
        }
        }
        
?>





