<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>forgetpassword</title>
        <style>
               #cntr
               {
                width: 550px;
                height: 280px;
                /*border: solid black 1px;*/
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                box-shadow: 0px 0px 50px;
               }
                body
                {
                 background-image: url('images/bkg-blu.jpg');
                }
		 button
                 {
		  color:white;
		  background-color:green;
		 }
		  h1
                  {
                    color:brown;
                    font-family:arial;
		  }
		   td
                   {
		    color:blue;
		   }
        </style>
    </head>
    
    <body>
        <div id="cntr">
            <center>
                <br>
	           <h1 >FORGET PASSWORD ???</h1>
                   <hr>
                   <!--<strong>Enter your pre-registered details</strong><br>-->
                   <form name="fpform" action="connforgetpass.php" onsubmit="return validateForm()" method="post">
            
                            <table>
                                <tr>
                                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" placeholder="Enter your registered email" name="email" autocomplete="off"  autofocus></td>
                                </tr>
                                 <tr>
                                      <td>Date of Joining<span style="color:red;"> *</span></td><td><input type="date" name="doj" autocomplete="off"></td>
                                 </tr>
                            </table>
                        
                            <br>
                            <button style="text-decoration: none;color:white;">Submit</button>
                            <input type="reset" value="Clear" style="text-decoration: none;color:white; background-color:green;" />
                            
                         </form>
            </center>
            <hr>
            
            <p><span style="color: red; padding-left: 70px;">*</span> denotes Mandatory fields</p>
        </div>
         <script>
                function validateForm() 
                {
                   var doj = document.forms["fpform"]["doj"].value;
                    if (doj === null || doj === "") 
                    {
                        alert("Date of joining must be filled out");
                        document.forms["fpform"]["doj"].focus();
                        return false;
                    }
                    
                    var e = document.forms["fpform"]["email"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Email must be filled out");
                        document.forms["fpform"]["email"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                }
         </script>
                
        <?php
        // put your code here
        ?>
    </body>
</html>
