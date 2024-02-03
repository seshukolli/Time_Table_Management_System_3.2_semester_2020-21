<?php
include_once 'db.php';
$year=$_POST['year'];
$branch=$_POST['branch'];
$sec=$_POST['section'];

    $a=$year."_".$branch."_".$sec."_faculty";
    
$sname1=$_POST['sname1'];
$fname1=$_POST['fname1'];
$sname2=$_POST['sname2'];
$fname2=$_POST['fname2'];
$sname3=$_POST['sname3'];
$fname3=$_POST['fname3'];
$sname4=$_POST['sname4'];
$fname4=$_POST['fname4'];
$sname5=$_POST['sname5'];
$fname5=$_POST['fname5'];
$sname6=$_POST['sname6'];
$fname6=$_POST['fname6'];
$sname7=$_POST['sname7'];
$fname7=$_POST['fname7'];
$sname8=$_POST['sname8'];
$fname8=$_POST['fname8'];
$sname9=$_POST['sname9'];
$fname9=$_POST['fname9'];


$query = "SELECT * FROM $a";
$result = mysqli_query($conn,$query) or die ("Error in query: $query. ".mysql_error()); 

if(mysqli_num_rows($result) > 0)
{
    $sql="UPDATE $a SET sname='$sname1' ,fname='$fname1' WHERE id='1'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname2' ,fname='$fname2' WHERE id='2'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname3' ,fname='$fname3' WHERE id='3'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname4' ,fname='$fname4' WHERE id='4'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname5' ,fname='$fname5' WHERE id='5'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname6' ,fname='$fname6' WHERE id='6'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname7' ,fname='$fname7' WHERE id='7'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname8' ,fname='$fname8' WHERE id='8'";    
    mysqli_query($conn,$sql);
    $sql="UPDATE $a SET sname='$sname9' ,fname='$fname9' WHERE id='9'";    
    mysqli_query($conn,$sql);
}
else
{
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname1','$fname1') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname2','$fname2') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname3','$fname3') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname4','$fname4') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname5','$fname5') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname6','$fname6') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname7','$fname7') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname8','$fname8') ;";
            mysqli_query($conn,$sql);
    $sql="INSERT INTO $a (sname,fname) VALUES ('$sname9','$fname9') ;";
            mysqli_query($conn,$sql);
 
}          
header("refresh:1; url=faculty.php")
?>