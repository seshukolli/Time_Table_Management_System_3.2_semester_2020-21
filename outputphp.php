<html>
    <head>
        <link rel="stylesheet" href="includes/output_css.css" >
    </head>
    <body>
    <a href="start.php"><button class="logout" >LOGOUT</button></a>
    <form method="POST" action="outputphp.php">
        <center>
                <input type="date" id="date" name="Day">&emsp;
            <button class="go" type="submit" name="go">Go</button>
        </center>      

    </form>
        <?php
        error_reporting(0);
        session_start();

        if(isset($_POST['go']))
        {
            $date=$_POST['Day'];
            $nameOfDay = date('l', strtotime($date));
            $day=$nameOfDay;
            $x=  ucfirst($day);
            echo "<h1>".str_repeat("&nbsp;",10).$x;
            $dates = date('d/m/Y', strtotime($date));
             echo "(".$dates.")"."</h1>";
        }
        else{

            $day=date("l");
            $x=  ucfirst($day);
            echo "<h1>".str_repeat("&nbsp;",10).$x;
            $today=date("Y-m-d");
            $dates = date('d/m/Y', strtotime($today));
            echo "(".$dates.")"."</h1>";

        }


        $email=$_SESSION['email'];
        $a=strpos($email,".");
        $b=strpos($email,"@");
        $dept=substr($email,$a+1,$b-$a-1);
        ?>
        <table align="center" border="1" cellspacing="0">
           
            <tr  bgcolor="b3ffe0">
                <th>FacultyName</th>
                <th>8:40 to 9:30</th>
                <th>9:30 to 10:20</th>
                <th>10:20 to 11:10</th>
                <th>11:10 to 12:00</th>
                <th>12:50 to 1:40</th>
                <th>1:40 to 2:30</th>
                <th>2:30 to 3:20</th>
               
            </tr>
           
           
       

           
     <?php
        include_once 'db.php';
        session_start();
        error_reporting(0);
        
        $email=$_SESSION['email'];
        $s = "SELECT * FROM faculty_email";
 
        $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

        $rows = $res->fetch_all(MYSQLI_ASSOC);
        $fmail=$_SESSION['fmail'];

        $p=  array('p1','p2','p3','p4','p5','p6','p7');
       
        echo '<tr>';
        
        $years=array('iii_cse_a','iii_cse_b','iii_cse_c');
         $v="select * from faculty_email where fmail = '$email'";
         $d=mysqli_query($conn,$v)or die(mysqli_error($conn));
         $r = mysqli_fetch_assoc($d);
         echo "<td>".$r['fname']."</td>";

        for($i=0;$i<7;$i++)
        {
            $flag=0;
            for($j=0;$j<count($years);$j++)
            {
            $ftable=$years[$j]."_faculty";
             $sql="select * from $years[$j] where day = '$day' and $p[$i] in (select sname from $ftable where fname in (select fname from faculty_email where fmail = '$email'))";
            $data=mysqli_query($conn,$sql)or die(mysqli_error($conn));
            $result = mysqli_fetch_assoc($data);
           
            if($result!="")
                     {
                        if($result[$p[$i]]==$result[$p[$i+1]]&& $result[$p[$i+1]]==$result[$p[$i+2]])
                        {
                           //"<center>".print "<td colspan=\"3\">SE/OST Lab</td>";."</center>"
                           echo '<td colspan="3" align="center">' .$result[$p[$i]]."<br>".$years[$j]. '</td>';
                           $i=$i+2;

                        }
                        else if($result[$p[$i]]==$result[$p[$i+1]])
                        {
                           echo '<td colspan="2" align="center">' .$result[$p[$i]]."<br>".$years[$j]. '</td>';
                           $i=$i+1;
                        }
                        else
                        {
                        echo "<td>"."<center>".$result[$p[$i]]."<br>".$years[$j]."</center>"."</td>";
                        }
                       $flag=1;
                       break;
           
                   }
           
             }
             if($flag==0)
               {
                echo "<td>"."</td>";
                }
        }
       
        echo '</tr>';        
       
        foreach($rows as $row)
            {
                $x=strpos($row["fmail"],".");
                $y=strpos($row["fmail"],"@");
                $d=substr($row["fmail"],$x+1,$y-$x-1);
                
                if($email==$row["fmail"])
                    {
                            continue;
                    }
                else if($dept!=$d&&$d!="tnp")
                {
                    continue;
                }
                    echo '<tr>';
                    $x=$row["fmail"];
                     $v="select * from faculty_email where fmail = '$x'";
                    $d=mysqli_query($conn,$v)or die(mysqli_error($conn));
                    $r = mysqli_fetch_assoc($d);
                    echo "<td>".$r['fname']."</td>";
                for($j=0;$j<7;$j++)
                {
                    $flag=0;
                  for($k=0;$k<count($years);$k++)
                    {
                     
                    $ftable=$years[$k]."_faculty";
                   
                     $sql="select * from $years[$k] where day = '$day' and $p[$j] in (select sname from $ftable where fname in (select fname from faculty_email where fmail = '$x'))";
                    $data=mysqli_query($conn,$sql)or die(mysqli_error($conn));
                    $result = mysqli_fetch_assoc($data);
           
                     if($result!="")
                     {
                         if($result[$p[$j]]==$result[$p[$j+1]]&& $result[$p[$j+1]]==$result[$p[$j+2]])
                         {
                            //"<center>".print "<td colspan=\"3\">SE/OST Lab</td>";."</center>"
                            echo '<td colspan="3" align="center">' .$result[$p[$j]]."<br>".$years[$k]. '</td>';
                            $j=$j+2;

                         }
                         else if($result[$p[$j]]==$result[$p[$j+1]])
                         {
                            echo '<td colspan="2" align="center">' .$result[$p[$j]]."<br>".$years[$k]. '</td>';
                            $j=$j+1;
                         }
                         else
                         {
                         echo "<td>"."<center>".$result[$p[$j]]."<br>".$years[$k]."</center>"."</td>";
                         }
                        $flag=1;
                        break;
                    }
                   
                   
                    }
                     if($flag==0)
                     {
                         echo "<td>"."</td>";
                     }
                }
                echo '</tr>';
   
            }
           
        header(" url=outputphp.php");
       
       
   
       ?>
           
            </table>
    </body>
</html>