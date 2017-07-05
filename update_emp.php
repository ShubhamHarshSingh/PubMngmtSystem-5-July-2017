<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Information</title>
		<style>
                    #cntr
            {
                width: 600px;
                height: 430px;
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
        <?php
              $conn=new mysqli("localhost", "root", "","reg");
              
              
        $query = "Select * from tbl_registration,tbl_credentials where regid=regid1";
        $ds=$conn->query($query);
        
         
       
        ?>
       
        <div id="cntr">
            <center>
                <br>
	<h1 >UPDATE INFORMATION</h1>
        <hr>
        <form name="updateform" action="update_db.php" onsubmit="return validateForm()" method="post">
            
			<table>
                            <?php
             
       // $d=mysqli_num_rows($ds);
       
        
        while($row=$ds->fetch_assoc())
        {
            
            
            $fnameu = $row['fname'];
            $lnameu = $row['lname'];
            $genderu = $row['gender'];
             $dobu = $row['dob'];
            $mobileu = $row['mobile'];
            $doju = $row['doj'];
             $emailu = $row['email'];
            $passu = $row['pass'];
            
           
        }
        
        ?>
                                <tr>
                                    <td>First Name<span style="color:red;"> *</span></td><td><?=$fnameu?></td>
                                </tr>
                
                                <tr><td>Last Name<span style="color:red;"> *</span></td><td><input type="text" value="<?=$lnameu?>" name="lname"></td></tr>
               
                                <tr>
                                    <td>Designation<span style="color:red;"> *</span></td><td><input type="text" value="<?=$desgu?>" name="desg"></td>
                                </tr>
                                
                                <tr>
                    <td>Gender<span style="color:red;"> *</span></td>
                    <td id="gender">
                        <input type="radio" name="gender" value="M" />Male
                        <input type="radio" name="gender" value="F"/>Female
                    </td>
                </tr>
                <tr>
                    <td>DOB</td><td><input type="date" value="<?=$dobu?>" name="dob"></td>
                </tr>
                <tr>
                    <td>Mobile No.</td><td><input type="number" value="<?=$mobileu?>" name="mobile"></td>
                </tr>
                <tr>
                    <td>Date of Joining<span style="color:red;"> *</span></td><td><input type="date" value="<?=$doju?>" name="doj"></td>
                </tr>
                <tr>
                    <td>Email ID<span style="color:red;"> *</span></td><td><input type="email" value="<?=$emailu?>" name="email" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Set Password<span style="color:red;"> *</span></td><td><input type="password" value="<?=$passu?>" name="pass"></td>
                </tr>
                <tr>
                    <td>Confirm Password<span style="color:red;"> *</span></td><td><input type="password" placeholder="Re enter your password" name="cpass"></td>
                </tr>
                
                
            </table>
			<br/>
                        <button type="submit" id="update" style="text-decoration: none;color:white;">Update</button>
                        <button type="reset" style="text-decoration: none;color:white; background-color:green;">Reset</Button>
                        <p><span style="color: red; padding-left: 10px;">*</span> denotes Mandatory fields</p>
			
			
            
            
        </form>
        
        
       
        
        
        </center>
        </div>
        <script>
                function validateForm() 
                {
                    var f = document.forms["updateform"]["fname"].value;
                    if (f === null || f === "") 
                    {
                        alert("First Name must be filled out");
                        document.forms["updateform"]["fname"].focus();
                        return false;   
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["updateform"]["fname"].focus();
                        return false;
                    }
                    
                    var l = document.forms["updateform"]["lname"].value;
                    if (l === null || l === "") 
                    {
                        alert("Last Name must be filled out");
                        document.forms["updateform"]["lname"].focus();
                        return false;
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["updateform"]["lname"].focus();
                        return false;
                    }
                    
                    var d = document.forms["updateform"]["desg"].value;
                    if (d === null || d === "") 
                    {
                        alert("Designation must be filled out");
                        document.forms["updateform"]["desg"].focus();
                        return false;
                    }
                    else if(/^[a-zA-Z\s-, ]+$/.test(f))
                    {
                        return  true;
                    }
                    else
                    {
                        alert("Only alphabets are allowed");
                        document.forms["updateform"]["desg"].focus();
                        return false;
                    }
                    
                    
                    var g = document.forms["updateform"]["gender"].value;
                    if (g === null || g === "") 
                    {
                        alert("Gender must be selected");
                        return false;
                    }
                  
                    var doj = document.forms["updateform"]["doj"].value;
                    if (doj === null || doj === "") 
                    {
                        alert("Date of joining must be filled out");
                        document.forms["updateform"]["doj"].focus();
                        return false;
                    }
                    
                    var e = document.forms["updateform"]["email"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Email must be filled out");
                        document.forms["updateform"]["email"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                    var m = document.forms["updateform"]["mobile"].value;
                    if (/^\d{10}$/.test(m)) 
                    return true;
                    else
                    {
                        alert("Number must be correct");
                        document.forms["updateform"]["mobile"].focus();
                        return false;
                    }
                    
                    var cp = document.forms["updateform"]["cpass"].value;
                    if (cp === null || cp === "") 
                    {
                        alert("Password must be confirmed");
                        document.forms["updateform"]["cpass"].focus();
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
         
      
    </body>
</html>
