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
        
function validate()
{
  if(isset($_COOKIE["PHPSESSID"])&&isset($_COOKIE["login_id"]))
  {
    $userid=$_COOKIE["login_id"];
    $sessid=$_COOKIE["PHPSESSID"];
    
    $conn=new mysqli("localhost", "root", "","reg");
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
        
    
    $qry="select * from ActiveSessions where sessionid='$sessid' and userid='$userid'";
    $rs=$conn->query($qry);
    if(mysqli_num_rows($rs)>0)
    {
      return 1;
    }
    else
    {
      setcookie("PHPSESSID","",time()-3600);
      setcookie("login_id","",time()-3600);
      return 0;
    }
  }
    else
    {
      return 0;
    }
}

        ?>
    </body>
</html>
