<!doctype html>
<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="script.js"></script>
    <link rel="stylesheet" href="css/admin.css">
        <link  rel="stylesheet" href="css/menu.css">
   <title> Home Page</title>
   <style>
      
.mySlides {
display:none;
margin-top: 0px;}
   </style>


</head>
<body>
<div class="header">

            <ul id="nav">
                <li><a href="aboutus.php">AboutUs</a></li>
                        <li><a class="hsubs" href="contactus.php">ContactUs</a> </li>
                        <li><a class="hsubs" href="login.php">Log-In</a></li>
                        <li><a class="hsubs" href="registration.php">Register</a>
                        <ul class="subs">
                           
                        
                        </ul>
                        </li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                
                <div id="lavalamp"></div>
            </ul>

        </div>

    <div id="slider">
    <img class="mySlides" src="images/1.jpg" style="height:331px;width:1000px;">
    <img class="mySlides" src="images/2.jpg" style="height:331px;width:1000px;" >
    <img class="mySlides" src="images/3.jpg" style="height:331px;width:1000px;">
    </div>  


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1;}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>
     <div class="footer"><ul id="ftr"><li style="float:left;">© NSD,DESIDOC </li>
 	  <li style="float:right;">Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px). </li></ul></div>
       


	   </body>
	   </html>