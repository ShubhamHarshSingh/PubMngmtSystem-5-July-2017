<!DOCTYPE html>
<?php
if(!isset($_SESSION['logged_in']))
    {
    header("Location : login.php");
}
//include 'validate.php';
//if(!validate())
//{
//  header("Location: login.php");
//}
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/jquery.js" type="text/javascript"></script>
          <script src="js/script.js" type="text/javascript"></script>
        
        <title>Admin Home Page</title>
     
   <style>



.mySlides {
display:none;
margin-top: 0px;}

</style>
    </head>
    <body>
    <div class="header">

            <ul id="nav">
                <li><a href="logout.php">Logout</a></li>
                
                <li><a class="hsubs" href="dashboard.php">Dashboard</a>
                   
                </li>
                <div id="lavalamp"></div>
            </ul>

        </div>
    
<div id="page">
<div id="left">
<div id="cssmenu">
<ul>
   
   <li class='active has-sub'><a href='#'>Employee</a>
      <ul>
               
          <li><a href='select_emp.php'><span>Update</span></a></li>
          <li><a href='delete_emp.php'><span>Remove/Delete</span></a></li>
               <li class='last'><a href='#'><span>View</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Publication</span></a>
            <ul>
                <li><a href='#'><span>Add</span></a></li>
              <li><a href='#'><span>Update</span></a></li>
              
               <li class='last'><a href='#'><span>View</span></a></li>
              
         
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Dispatch</span></a>
            <ul>
                <li><a href='dispatch.php'><span>Dispatch Schedule</span></a></li>
                <li><a href='dispatchdetails.php'><span>Dispatch Status</span></a></li>
                
            </ul>
         </li>
         <li><a href='aboutus.php'><span>About Us</span></a></li>
         <li><a href='contactus.php'><span>Contact Us</span></a></li>
</ul>     
</div>
</div>
	<div id="slider">
    <img class="mySlides" src="images/1.jpg" style="height:331px;width:1020px;">
    <img class="mySlides" src="images/2.jpg" style="height:331px;width:1020px;" >
    <img class="mySlides" src="images/3.jpg" style="height:331px;width:1020px;">
    </div>  
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
