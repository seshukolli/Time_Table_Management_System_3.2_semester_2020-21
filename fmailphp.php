<?php
include_once 'db.php';
session_start();
$fmail=$_POST['fmail'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$mails=array('');
$_SESSION['mails']=$mails;
array_push($mails,$fmail);
if(isset($_POST['insert']))
{
    $sql="INSERT INTO faculty_email (fmail,password,fname) VALUES ('$fmail','$pass','$fname') ;";
    mysqli_query($conn,$sql);
}
  
 if(isset($_POST['delete']))
 {
     $sql="Delete from faculty_email where fmail='$fmail';";
     mysqli_query($conn,$sql);
     for($i=0;$i<count($mails);$i++)
     {
         if($mails[$i]==$fmail)
         {
            unset($mails[$i]);
         }

     }
     
 }

 header("Location:fmail.php");
?>