<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <style>
            form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
        </style>

        <link rel="icon" type="image/png" href="images/desidoc_logo.jpg">
        <link rel="stylesheet" type="text/css" href="css/css_login.css"/>
        
    </head>
    <body>
        <div id="cntr">
            <div id="title_login">
                <table width="100%" height="100%">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <strong><span style=" font-size: 20px">Marketing Integrated Management System</span></strong>
                                    </td>
                                </tr>
                                <tr><td></td></tr>
                                <tr>
                                    <br/>
                                    <td><strong><span style="padding-left:200px; margin-top: 50px;"><u>Login Portal</u></span></strong></td>
                                </tr>
                            </table> 
                        </td>
                        <td align="right">
                            <a href="index.php">
                                <img src="images/mainlogo.jpg" alt="Desicoc Logo" height="96px" width="96px" style="opacity:0.75"/>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="cntr_bdy">
                <div id="content">
                 <!--<h2>Login Form</h2>-->

                 <form name="login" action="connlogin.php" onsubmit="return validateForm()" method="POST">
 
  <br>
  <div class="container">
      <label style="color: blue"><b>Username</b><span style="color: red; margin-left: 5px;">*</span></label>
    <input type="text" placeholder="Enter Username" name="login_id" placeholder="Enter Login ID" autocomplete="off"  autofocus><br><br>

    <label style="color: blue"><b>Password</b><span style="color: red; margin-left: 5px;">*</span></label>
    <input type="password" placeholder="Enter Password" name="password" placeholder="Enter Password">
        
    <button type="submit" name="submit" value="login">Login</button>
   <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" >
    <input type="Reset" class="cancelbtn">
    <span class="psw"><a href="forgetpass.php">Forgot password?</a></span>
  </div>
</form>   
                </div>
            </div>
        </div>
        
        <script>
                function validateForm() 
                {
                    var e = document.forms["login"]["login_id"].value;
                    var atpos = e.indexOf("@");
                    var dotpos = e.lastIndexOf(".");
                    if (e === null || e === "") 
                    {
                        alert("Login Id must be filled out");
                        document.forms["login"]["login_id"].focus();
                        return false;
                    }
                    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
                    {
                     alert("Not a valid email address");  
                     return false;
                    }
                    
                    var p = document.forms["login"]["password"].value;
                    if (p === null || p === "") 
                    {
                        alert("Password must be filled out");
                        document.forms["login"]["password"].focus();
                        return false;
                    }
                }
         </script>
        
        <!--<script language="javascript">
            function check(form)
            {
                if(form.login_id.value==="desidoc" && form.password.value==="desidoc")
                {
                    window.open('target.html');
                }
                else if(form.login_id.value==="user" && form.password.value==="user")
                {
                    window.open('target1.html');   
                }
                else
                {
                    alert("Wrong Password or Username");
                }
            }
         </script> -->
        <?php
        // put your code here
        ?>
    </body>
</html>
