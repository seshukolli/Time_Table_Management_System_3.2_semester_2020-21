<html>
<head>
<link rel="stylesheet" href="includes/faculty.css?v=<?php echo time(); ?>" >
</head>
 <body>
<div class="content">
    <div class="logout-btn">
 <form  action="start.php" target="_parent" method="post">
		<button class="logout" type="submit">LOGOUT</button>
	</form>
</div>
     <form action="facultyphp.php" method="POST">
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
            
                   
                       
                        <table align="center" border="2" cellspacing="2" cellpadding="2">
                        <thead>
                            <tr>
                            <center><th>SUBJECT NAME</th></center>
                            <center><th>FACULTY</th></center>
                            </tr>
                            <tr>
                        </thead>  

                        <tbody>
                            <td><input type="text" name="sname1"></td>
                            <td><input type="text" name="fname1"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname2"></td>
                            <td><input type="text" name="fname2"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname3"></td>
                            <td><input type="text" name="fname3"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname4"></td>
                            <td><input type="text" name="fname4"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname5"></td>
                            <td><input type="text" name="fname5"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname6"></td>
                            <td><input type="text" name="fname6"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname7"></td>
                            <td><input type="text" name="fname7"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname8"></td>
                            <td><input type="text" name="fname8"></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="sname9"></td>
                            <td><input type="text" name="fname9"></td>
                            </tr>
                        </tbody>    
                        </table><br><br>
     
               
                        <center><button class="buttons" type="submit" >Submit</button></center>
                    </form>
            
                    </div>
 </body>
</html>