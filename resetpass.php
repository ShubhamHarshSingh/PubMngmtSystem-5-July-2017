<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>resetpassword</title>
         <style>
               #cntr
               {
                width: 550px;
                height: 310px;
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
	           <h1 >RESET PASSWORD</h1>
                   <hr>
                     <form name="resetform" action="connresetpass.php" onsubmit="return validateForm()" method="post">
            
                            <table>
                                <tr>
                                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" placeholder="Enter your email" name="email" autocomplete="off"  autofocus></td>
                                </tr>
                                <tr>
                                    <td>Current Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Enter current password" name="opass" autocomplete="off" ></td>
                                </tr>
                                <tr>
                                    <td>New Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Enter new password" name="pass" autocomplete="off"></td>
                                </tr>
                                 <tr>
                                      <td>Confirm New Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Confirm new password" name="cpass" autocomplete="off"></td>
                                 </tr>
                            </table>
                        
                            <br>
                            <button style="text-decoration: none;color:white;">Submit</button>
                            <input type="reset" value="Clear" style="text-decoration: none;color:white; background-color:green;" />
                            
                         </form>
            </center>
            <hr>
            
            <p><span style="color: red; padding-left: 30px;">*</span> denotes Mandatory fields</p>
        </div>
        
        <script>
             function validateForm() 
                {
                    var op = document.forms["resetform"]["opass"].value;
                    if (op === null || op === "") 
                    {
                        alert("Password must be filled out");
                        document.forms["resetform"]["opass"].focus();
                        return false;
                    }
                    
                    var p = document.forms["resetform"]["pass"].value;
                    if (p === null || p === "") 
                    {
                        alert("Password must be filled out");
                        document.forms["resetform"]["pass"].focus();
                        return false;
                    }
                    else if (op===p)
                    {
                        alert("New Password must be different from current password");
                        document.forms["resetform"]["pass"].focus();
                        return false;
                    }
                    
                    var cp = document.forms["resetform"]["cpass"].value;
                    if (cp === null || cp === "") 
                    {
                        alert("Password must be confirmed");
                        document.forms["resetform"]["cpass"].focus();
                        return false;
                    }
                    else if(cp !== p)
                    {
                        alert("Password mismatch");
                        return false;
                    }
                    else
                    {
                        return true;
                    }
                }
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
