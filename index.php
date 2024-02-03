<!DOCTYPE html>
<html>
  <head>
    <title>Start Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
       body {
                background: #555;
            }
           
       .content  {
                   max-width: 1000px;
                   height: 620px;
                   margin: auto;
                   background: white;
                   padding: 10px;
                }
                   
       .button {
                   border-radius:25px;
                   position: absolute;
                   color: black;
                   padding: 5px 25px;
                   text-align: center;
                   text-decoration: none;
                   display: inline-block;
                   font-size: 15px;
                   margin: 4px 2px;
                   margin-left:400px;
                   cursor: pointer;
               }
                
       .button:hover{
                        background-color: grey;
                        color: white;
                   }

       .mySlides {
                   display:none;
                   margin-left:5px;
                 }

    </style>
  </head>
  <body>

     <div class="content">
     <h1 align="center">WELCOME TO<br>ANIL NEERUKONDA INSTITUTE OF</br> TECHNOLOGY AND SCIENCES</h1>
        <div class="contents" style="max-width:500px">
          <img  class="mySlides" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiTlGCV728psDJkWjGvwYZFki5QIO4pRX1kA&usqp=CAU" width="1000" height="430" align="center">
          <img  class="mySlides" src="https://cse.anits.edu.in/sliderhome/images/rsz_dsc_0219.jpg" width="1000" height="430">    
          <img  class="mySlides" src="https://cse.anits.edu.in/headercse.jpg" width="1000" height="430">
           <img  class="mySlides" src="https://cse.anits.edu.in/sliderhome/images/rsz_dsc_0219.jpg" width="1000" height="430">
          <form action="start.php"><button type="submit" value="home" class="button">Go To Home Page</button></form>   
        </div>     
     </div>
     <script>
        var myIndex = 0;
        carousel();
        
        function carousel() 
          {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) 
              {
                 x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 2000); // Change image every 2 seconds
          }
     </script>
  </body>
</html>