<!DOCTYPE html>
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
        
        <link href="css/design.css" rel="stylesheet" >
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/jquery.js" type="text/javascript"></script>
          <script src="js/script.js" type="text/javascript"></script>
        <title>Update Employee Page</title>
     
   <style>

.mySlides {
display:none;
margin-top: 0px;}

</style>
    </head>
    <body>
    <div class="header">

            <ul id="nav">
                <li><a href="#">Logout</a></li>
                
                <li><a class="hsubs" href="dashboard.php">Dashboard</a>
                   
                </li>
                <div id="lavalamp"></div>
            </ul>

        </div>
    

<div id="left">
<div id="cssmenu">
<ul>
   
   <li class='active has-sub'><a href='#'><span>Employee</span></a>
      <ul>
               
               
               <li><a href='#'><span>Remove/Delete</span></a></li>
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
                <li><a href='#'><span>Dispatch Schedule</span></a></li>
              <li><a href='#'><span>Dispatch Status</span></a></li>
                
            </ul>
         </li>
   <li><a href='#'><span>About Us</span></a></li>
   <li><a href='#'><span>Contact Us</span></a></li>
</ul>     
</div>
</div>
	<div id="slider">
    <div class="styled-select">
       <center>
           <h1>Choose Employee </h1><select class="list" name="select" onchange="location = this.value;">
               <option selected="selected" class="service-small">-Select Employee-</option>
               <?php
              $conn=new mysqli("localhost", "root", "","reg");
        $query = "SELECT emp_fname FROM tbl_emp_det ";
        $ds=$conn->query($query);
        $d=mysqli_num_rows($ds);
        
        while($d>0)
        {
            $row=$ds->fetch_assoc();
            $name = $row['emp_fname'];
           
           
            echo "<option value='update_emp.php'>$name</option>" ; 
        }
        
        ?>
    </select>
       </center>
</div>
    </div>  

	  <div class="footer"><ul id="ftr"><li style="float:left;">© NSD,DESIDOC </li>
 	  <li style="float:right;">Best viewed in latest versions of Google Chrome and Mozilla Firefox(1024*768px). </li></ul></div>
       
    </body>
</html>
