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
         // Create connection
$conn=new mysqli("localhost", "root", "","reg");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
         
        if(isset($_POST['update'])){
            $fnameu = $_POST['fname'];
            $lnameu = $_POST['lname'];
            $desgu = $_POST['desg'];
            $genderu = $_POST['gender'];
             $dobu = $_POST['dob'];
            $mobileu = $_POST['mobile'];
            $doju = $_POST['doj'];
             $emailu = $_POST['email'];
            $passu = $_POST['pass'];
            $cpassu = $_POST['cpass'];
        
            
            $q="UPDATE tbl_user SET user_pass='$passu',user_name='$emailu' where user_name='$emailu'";
            $dsu=$conn->query($q);
            
            $r="UPDATE tbl_emp_det SET emp_fname='$fnameu',emp_lname='$lnameu',emp_desg='$desgu',emp_gender='$genderu',emp_dob='$dobu',emp_mobile='$mobileu',emp_doj='$doju' where emp_fname='$fnameu'";
            $dsu1=$conn->query($r);
            
            if(!$dsu || !$dsu1 )
            {
                die('Could not update data:' . mysql_error());
            }
            else
                echo "Data updated successfully";
        }
            
        
        ?>
    </body>
</html>
