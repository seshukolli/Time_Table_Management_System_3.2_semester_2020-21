<!DOCTYPE html>
<html >
  <head>

    <title>Login And Registration </title>
    <link rel="stylesheet" href="includes/logincss.css">
   </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" name="button" class="toggle-btn" onclick="login()">Faculty</button>
          <button type="button" name="button" class="toggle-btn" onclick="register()">Admin</button>
        </div>
        <div class="social-icons">
            <form id="login"class="input-group" action="logindb.php" method="post">
            <img src="https://img.icons8.com/plasticine/2x/teacher.png" height="100" width="400">
            <input type="text" name="email" class="input-field" placeholder="User Id" required>
            <input type="password" name="password" id="mypass" class="input-field" placeholder="password"
             required>
            <input type="checkbox" onclick="myFunction()">Show Password
           
           
            <button type="submit" class="submit-btn" name="button">Login</button>
          </form>
        </div>
        <div class="social-icons">
            <form id="register" class="input-group" action="admindb.php" method="post" onSubmit="return fd()" name="admin">
            <img src="https://img.icons8.com/dusk/2x/admin-settings-male.png" height="100" width="400" >
            <input type="text" name="adminid" class="input-field" placeholder="E-mail Id" required>
            <input type="password" name="password" class="input-field" placeholder="password" required>
            <button type="submit" class="submit-btn" name="button" >Login</button>
          </form>
        </div>

      </div>
       <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        var e=document.admin.adminid.value;
        var p=document.admin.password.value;
        function register(){
          x.style.left="-400px";
          y.style.left="50px";
          z.style.left="110px";
        }
        function login(){
          x.style.left="50px";
          y.style.left="450px";
          z.style.left="0px";
        }
        /*function fd(){
        if(e!="admin"&&p!="Admin@123")
        {
             window.alert("Check your Username and Password");
        }
        }*/  
        function myFunction() 
        {
            var x = document.getElementById("mypass");
            if (x.type === "password") 
            {
            x.type = "text";
            } 
            else 
            {
            x.type = "password";
            }
        }
        </script>



  </body>
</html>