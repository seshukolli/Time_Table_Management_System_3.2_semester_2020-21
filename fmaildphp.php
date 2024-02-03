 <?php
include_once 'db.php';


$query = "SELECT * FROM ii_cse_a";

// execute query 
$result = mysqli_query($conn,$query) or die ("Error in query: $query. ".mysql_error()); 
if (mysqli_num_rows($result) > 0) { 
 echo "Table is not Empty";
}
else echo "Table is Empty";

/*
  $sql="SELECT COUNT(id) FROM ii_cse_a";

  $sql = "SELECT * FROM faculty_email";
 
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
    printf("%s\n", $row["fmail"]);
    $v=$row["fname"];
    echo $v;
}

session_start();
while($row=mysql_fetch_array($result,MYSQL_BOTH)) {
    echo "<tr>";
    $id=$row['id'];
    $array[] = $id;
}
$_SESSION['id'] = $array;*/

?>

