<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="includes/table.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <div class="header">
        <img src="includes/images/anits-logo-w.png">
        <center><h1>TIME TABLE</h1></center>
        <form  action="start.php" target="_parent" method="post">
            <button class="logout" type="submit">Logout</button>
        </form>
    </div>
    <div class="content">
        
        <form method="POST" action="sectionphp.php">
            <div class="options">
                <label for="year">Choose a Year:</label>
                <select id="#" name="year">
                    <option value="i">I</option>
                    <option value="ii">II</option>
                    <option value="iii">III</option>
                    <option value="iv">IV</option>
                </select>
                
                <label for="branch">Choose a Branch:</label>
                <select id="#" name="branch">
                    <option value="cse">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="MECH">MECH</option>
                    <option value="ECE">ECE</option>
                </select>
                
                <label for="section">Choose a Section:</label>
                <select id="#" name="section">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>  
            </div>
            <div class="time">
                
                <center><table  align="center">
                    
                    <thead>
                        <tr>
                            <th align="center" ><br>
                                <b>Day/Period</b><br>
                            </th>
                            
                            <th align="center" >
                                <b>I <br> 8:40-9:30</b>
                            </th>
                            
                            <th align="center" >
                                <b>II<br>9:30-10:20</b>
                            </th>
                            
                            <th align="center" >
                                <b>III<br>10:20-11:10</b>
                            </th>
                            
                            <th align="center" >
                                <b>IV</br>11:10-12:00</b>
                            </th>
                            
                            <th align="center" >
                                <b>12:00-12:50</b>
                            </th>
                            
                            <th align="center" >
                                <b>V<br>12:50-1:40</b>
                            </th>
                            
                            <th align="center" >
                                <b>VI<br>1:40-2:30</b>
                            </th>
                            
                            <th align="center" >
                                <b>VII<br>2:30-3:20</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" height="50">
                                <p>Monday</p>
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="mp1" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="mp2" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="mp3" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="mp4" size="4">
                            </td>
                            <td rowspan="6" align="center" height="50">
                                <h2>L<br>U<br>N<br>C<br>H</h2>
                            </td>
                            
                            
                            <td align="center" height="50" >
                                <input type="text" name="mp5" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="mp6" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="mp7" size="4">
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center" height="50">
                                <p>Tuesday</p>
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="tup1" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="tup2" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="tup3" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="tup4" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="tup5" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="tup6" size="4">
                            </td>
                            
                            <td align="center" height="50" > 
                                <input type="text" name="tup7" size="4">
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center" height="50">
                                <p>Wednesday</p>
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="wp1" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="wp2" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="wp3" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="wp4" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="wp5" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="wp6" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="wp7" size="4">
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center" height="50">
                                <p>Thursday</p>
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="thp1" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="thp2" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="thp3" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="thp4" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="thp5" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="thp6" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="thp7" size="4">
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center" height="50">
                                <p>Friday</p>
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="fp1" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="fp2" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="fp3" size="4">
                            </td>
                            
                            <td align="center" height="50" > 
                                <input type="text" name="fp4" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="fp5" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="fp6" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="fp7" size="4">
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center" height="50">
                                <p>Saturday</p>
                            </td>
                            
                            <td align="center" height="50"> 
                                <input type="text" name="sp1" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="sp2" size="4">
                            </td>
                            
                            <td align="center" height="50">
                                <input type="text" name="sp3" size="4">
                            </td>
                            
                            <td align="center" height="50" > 
                                <input type="text" name="sp4" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="sp5" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="sp6" size="4">
                            </td>
                            
                            <td align="center" height="50" >
                                <input type="text" name="sp7" size="4">
                            </td>
                        </tr>

                    </tbody>
                </table></center>
                <div class="btn-grp">
                    <center>
                        <button  class="buttons" type="submit" name="button"  >
                            <b>Submit</b>
                        </button>&emsp;
                        <button  class="buttons" type="reset" name="button"  >
                            <b>Reset</b>
                        </button>
                    </center>
                </div>  
            </div>
        </form>
    </div>
</body>
</html>