<?php

include_once 'db.php';

$id = $_POST['adminid'];
$pass = $_POST['password'];

if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {


        if ($id=="admin" && $pass=="admin")
        {    
            header("Location:frame.php");
        }
        else{
            echo "<script> alert('invalid username or password')</script>";
              header("refresh:0; url=start.php");
        }

        }

       
?>