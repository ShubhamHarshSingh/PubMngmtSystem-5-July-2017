<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        
        
        $usr=$_POST{"login_id"};
        $passw=$_POST{"password"};
        
        $_SESSION["logged_in"] = "logged_in";
        
        $conn=new mysqli("localhost","root","","reg");
        $qry="select * from tbl_user where user_name='$usr' && user_pass='$passw'";
        $ds=$conn->query($qry);
        if(mysqli_num_rows($ds)>0)
        {
            $d=$ds->fetch_assoc();
            if($usr=="admin@admin.com")
            {
                header("Location: adminhomepage.php");
            }
            else
            {
                header("Location: userhomepage.php");
            }
        }
        else
        {
            echo "<html>
    <head>
        <meta charset='UTF-8'>
        <title></title>
    
    
        <style>
                    #cntr
                    {
                        width: 600px;
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
                    h1
                    {
                    color:brown;
                    font-family:arial;
                    }
                     p
                    {
                    color:black;
                    font-family:arial;
                    align:justify;
                    }
                    a
                    {
                    font-size:20px
                    }
        </style>
        </head>
        <body>
        <div id='cntr'>
            <center>
                <br>
	<h1 >INVALID USER</h1><br>
        <p>
             <a href='login.php'>CLICK HERE TO LOGIN</a>
        </p>
        
        <?php
     
        ?>
    </body>
</html><br><br><hr>";
            }
        ?>
    </body>
</html>
