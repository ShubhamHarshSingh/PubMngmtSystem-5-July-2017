<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/w3.css">
        <title></title>
        
    </head>
    <body>
        <?php
         $conn=new mysqli("localhost","root","","reg");
        if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }
            
        echo "<center>
            <div class='w3-container w3-margin' style='width:70%'>
                <table class='w3-table-all w3-centered w3-card-4'>
                <tr>
                <th>Id</th>
                <th>Item_name</th>
                <th>Item_quantity</th>
                <th>Dispatch_to</th>
                <th>Dispatch_date</th>
                <th>Dispatch_address</th>
                <th>Dispatch_medium</th>
                <th>Serial_no</th>
                </tr></center>";
        
        $sql="SELECT * from tbl_dispatchdetails";
        $ds=$conn->query($sql);
        $d=mysqli_num_rows($ds);
        for($i=0;$i<=$d;$i++)
        {
            $result=$ds->fetch_assoc();
        
        
        {
        echo "<tr><td>".$result["regid2"].
                "</td><td>".$result["Item_name"].
                "</td><td>".$result["Item_quantity"].
                "</td><td>".$result["Dispatch_to"].
                "</td><td>".$result["Dispatch_date"].
                "</td><td>".$result["Dispatch_address"].
                "</td><td>".$result["Dispatch_medium"].
                "</td><td>".$result["Serial_no"].
                "</td></tr>";
        }
        }
        echo "</table></div>";
        mysqli_close($conn);
        ?>
    </body>
</html>
