<html>
    <head>
        <link rel="stylesheet" href="includes/fregister.css">
    </head>
    <body>
        <div class="logout-btn">
            <form  action="start.php" target="_parent" method="post">
                <button class="logout" type="submit">LOGOUT</button></br>
            </form>
        </div>
       
        <div class="content">
            <form action="fmailphp.php" method="POST">
                <table align="center" border="2" cellspacing="2" cellpadding="2">
                    <thead>
                        <tr>
                            <th>E-mail</th>
                            <th>Password</th>
                            <th>Faculty Name</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <tr>
                            <td><input type="text" name="fmail"></td>
                            <td><input type="text" name="pass"></td>
                            <td><input type="text" name="fname"></td>
                        </tr>
                    </tbody>  
                </table><br><br>
               
                <center><button class="buttons" type="submit" name="insert">Submit</button></center>
            </form>
           
            <form action="fmailphp.php" method="POST">
                <table align="center" border="2" cellspacing="2" cellpadding="2">
                    <tr>
                        <th>E-mail</th>
                    </tr>
                   
                    <tr>
                        <td><input type="text" name="fmail"></td>
                    </tr>
                </table><br><br>
               
                <center><button class="buttons" type="submit" name="delete">Delete</button></center>
            </form>
        </div>
    </body>
</html>