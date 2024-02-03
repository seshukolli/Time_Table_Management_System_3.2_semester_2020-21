<?php
include_once 'db.php';
 
    $year=$_POST['year'];
    $branch=$_POST['branch'];
    $sec=$_POST['section'];

    $a=$year."_".$branch."_".$sec;

   
$mp1=$_POST['mp1'];
$mp2=$_POST['mp2'];
$mp3=$_POST['mp3'];
$mp4=$_POST['mp4'];
$mp5=$_POST['mp5'];
$mp6=$_POST['mp6'];
$mp7=$_POST['mp7'];


$tup1=$_POST['tup1'];
$tup2=$_POST['tup2'];
$tup3=$_POST['tup3'];
$tup4=$_POST['tup4'];
$tup5=$_POST['tup5'];
$tup6=$_POST['tup6'];
$tup7=$_POST['tup7'];

$wp1=$_POST['wp1'];
$wp2=$_POST['wp2'];
$wp3=$_POST['wp3'];
$wp4=$_POST['wp4'];
$wp5=$_POST['wp5'];
$wp6=$_POST['wp6'];
$wp7=$_POST['wp7'];

$thp1=$_POST['thp1'];
$thp2=$_POST['thp2'];
$thp3=$_POST['thp3'];
$thp4=$_POST['thp4'];
$thp5=$_POST['thp5'];
$thp6=$_POST['thp6'];
$thp7=$_POST['thp7'];

$fp1=$_POST['fp1'];
$fp2=$_POST['fp2'];
$fp3=$_POST['fp3'];
$fp4=$_POST['fp4'];
$fp5=$_POST['fp5'];
$fp6=$_POST['fp6'];
$fp7=$_POST['fp7'];

$sp1=$_POST['sp1'];
$sp2=$_POST['sp2'];
$sp3=$_POST['sp3'];
$sp4=$_POST['sp4'];
$sp5=$_POST['sp5'];
$sp6=$_POST['sp6'];
$sp7=$_POST['sp7'];

    $query = "SELECT * FROM $a";
    $result = mysqli_query($conn,$query) or die ("Error in query: $query. ".mysql_error()); 

if(mysqli_num_rows($result) > 0)
{
    $sql="UPDATE $a SET day='Monday' ,p1='$mp1',p2='$mp2',p3='$mp3',p4='$mp4',p5='$mp5',p6='$mp6',p7='$mp7' WHERE id='1'";    
    mysqli_query($conn,$sql);

    $sql="UPDATE $a SET day='Tuesday' ,p1='$tup1',p2='$tup2',p3='$tup3',p4='$tup4',p5='$tup5',p6='$tup6',p7='$tup7' WHERE id='2'";
    mysqli_query($conn,$sql);

    $sql="UPDATE $a SET day='Wednesday' ,p1='$wp1',p2='$wp2',p3='$wp3',p4='$wp4',p5='$wp5',p6='$wp6',p7='$wp7' WHERE id='3'";
    mysqli_query($conn,$sql);
    
    $sql="UPDATE $a SET day='Thursday' ,p1='$thp1',p2='$thp2',p3='$thp3',p4='$thp4',p5='$thp5',p6='$thp6',p7='$thp7' WHERE id='4'";
    mysqli_query($conn,$sql);

    $sql="UPDATE $a SET day='Friday' ,p1='$fp1',p2='$fp2',p3='$fp3',p4='$fp4',p5='$fp5',p6='$fp6',p7='$fp7' WHERE id='5'";
    mysqli_query($conn,$sql);

    $sql="UPDATE $a SET day='Saturday' ,p1='$sp1',p2='$sp2',p3='$sp3',p4='$sp4',p5='$sp5',p6='$sp6',p7='$sp7' WHERE id='6'";
    mysqli_query($conn,$sql);

}
else
{
    $sql="INSERT INTO  $a (day,p1,p2,p3,p4,p5,p6,p7) VALUES ('Monday','$mp1','$mp2','$mp3','$mp4','$mp5','$mp6','$mp7');";
    mysqli_query($conn,$sql);
    
    $sql="INSERT INTO  $a (day,p1,p2,p3,p4,p5,p6,p7) VALUES ('Tuesday','$tup1','$tup2','$tup3','$tup4','$tup5','$tup6','$tup7');";
    mysqli_query($conn,$sql);
    
    $sql="INSERT INTO  $a (day,p1,p2,p3,p4,p5,p6,p7) VALUES ('Wednesday','$wp1','$wp2','$wp3','$wp4','$wp5','$wp6','$wp7');";
    mysqli_query($conn,$sql);
    
    $sql="INSERT INTO  $a (day,p1,p2,p3,p4,p5,p6,p7) VALUES ('Thursday','$thp1','$thp2','$thp3','$thp4','$thp5','$thp6','$thp7');";
    mysqli_query($conn,$sql);
    
    $sql="INSERT INTO  $a (day,p1,p2,p3,p4,p5,p6,p7) VALUES ('Friday','$fp1','$fp2','$fp3','$fp4','$fp5','$fp6','$fp7');";
    mysqli_query($conn,$sql);
    
    $sql="INSERT INTO  $a (day,p1,p2,p3,p4,p5,p6,p7) VALUES ('Saturday','$sp1','$sp2','$sp3','$sp4','$sp5','$sp6','$sp7');";
    mysqli_query($conn,$sql);
    
}
header("refresh:1; url=section.php")
?>