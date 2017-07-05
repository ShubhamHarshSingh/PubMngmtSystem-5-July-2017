<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
		<style>
                    #cntr
            {
                width: 600px;
                height: 470px;
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
		button{
                width:90px;
                height:35px;
                padding:5px;    
		color:white;
		background-color:green;
		}
		
		h1{
		color:brown;
		font-family:arial;
		}
		td{
		color:blue;
		}
		#gender{
		color:black;
		}
		</style>
		                     
    </head>
    <body >
        <div id="cntr">
            <center>
                <br>
	<h1 >REGISTRATION FORM</h1>
        <hr>
        <form name="regform" action="connectionreg.php" onsubmit="return validateForm()" method="post">
            
			<table>
                                <tr>
                                    <td>First Name<span style="color:red;"> *</span></td><td><input type="text" placeholder="First name" name="fname" autofocus></td>
                                </tr>
                
                <tr><td>Last Name<span style="color:red;"> *</span></td><td><input type="text" placeholder="Last name" name="lname"></td></tr>
               
                <tr>
                                    <td>Designation<span style="color:red;"> *</span></td><td><input type="text" placeholder="Designation" name="desg"></td>
                                </tr>
                <tr>
                    <td>Gender<span style="color:red;"> *</span></td>
                    <td id="gender">
                        <input type="radio" name="gender" value="M" />Male
                        <input type="radio" name="gender" value="F"/>Female
                    </td>
                </tr>
                <tr>
                    <td>DOB</td><td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td>Mobile No.</td><td><input type="number" placeholder="Enter your Mobile no." name="mobile"></td>
                </tr>
                <tr>
                    <td>Date of Joining<span style="color:red;"> *</span></td><td><input type="date" name="doj"></td>
                </tr>
                <tr>
                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" placeholder="Enter your email" name="email" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Set Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Enter your password" name="pass"></td>
                </tr>
                <tr>
                    <td>Confirm Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Re enter your password" name="cpass"></td>
                </tr>
                
                
            </table>
			<br/>
                        <button style="text-decoration: none;color:white;">Register</button>
                        <button type="reset" style="text-decoration: none;color:white; background-color:green;">Reset</Button>
                        <p><span style="color: red; padding-left: 10px;">*</span> denotes Mandatory fields</p>
			
			
            
            
        </form>
        </center>
        </div>
        <script>
                function validateForm() 
                {
                    var f = document.forms["regform"]["fname"].value;
                    if (f === null || f === "") 
                    {
                        alert("First Name must be filled out");
                        document.forms["regform"]["fname"].focus();
                        return false;   
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f)) 
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["regform"]["fname"].focus();
                        return false;
                    }
                    
                    var l = document.forms["regform"]["lname"].value;
                    if (l === null || l === "") 
                    {
                        alert("Last Name must be filled out");
                        document.forms["regform"]["lname"].focus();
                        return false;
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["regform"]["lname"].focus();
                        return false;
                    }
                    
                    var d = document.forms["regform"]["desg"].value;
                    if (d === null || d === "") 
                    {
                        alert("Designation must be filled out");
                        document.forms["regform"]["desg"].focus();
                        return false;
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["regform"]["desg"].focus();
                        return false;
                    }
                    
                    var g = document.forms["regform"]["gender"].value;
                    if (g === null || g === "") 
                    {
                        alert("Gender must be selected");
                        return false;
                    }
                  
                    var doj = document.forms["regform"]["doj"].value;
                    if (doj === null || doj === "") 
                    {
                        alert("Date of joining must be filled out");
                        document.forms["regform"]["doj"].focus();
                        return false;
                    }
                    
                    var e = document.forms["regform"]["email"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Email must be filled out");
                        document.forms["regform"]["email"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                    var m = document.forms["regform"]["mobile"].value;
                    if (/^\d{10}$/.test(m)) 
                    return true;
                    else
                    {
                        alert("Number must be correct");
                        document.forms["regform"]["mobile"].focus();
                        return false;
                    }
                    
                     var p = document.forms["regform"]["pass"].value;
                    if (p === null || p === "") 
                    {
                        alert("Password must be confirmed");
                        document.forms["regform"]["pass"].focus();
                        return false;
                    }
                    
                    var cp = document.forms["regform"]["cpass"].value;
                    if (cp === null || cp === "") 
                    {
                        alert("Password must be confirmed");
                        document.forms["regform"]["cpass"].focus();
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
