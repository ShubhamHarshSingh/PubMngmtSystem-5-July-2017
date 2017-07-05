<?php
session_start();
session_unset();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
/*$conn=new mysqli("localhost","root","","reg");

if(isset($_POST["login_id"])&&isset($_POST["password"]))
{
    $emailid=$_POST["login_id"];
    $passid=$_POST["password"];
    setcookie("PHPSESSID","",time()-3600);
    setcookie("PHPSESSPASS","",time()-3600);
    $QRY="delete from ActiveSessions where password='$passid'";
    $conn->query($qry);
    session_destroy();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
}*/
?>