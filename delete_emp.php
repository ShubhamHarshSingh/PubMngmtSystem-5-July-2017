<html>
<head>
<title>Delete Data </title>
<meta content="noindex, nofollow" name="robot">
<link href="css/del_emp_style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="maindiv">

<div class="title">
<h2>Delete Data </h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Id</p>
<?php
$connection = @mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = @mysql_select_db("reg", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from tbl_emp_det where emp_id=$del", $connection);
}
$query = mysql_query("select * from tbl_emp_det", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"delete_emp.php?id={$row['emp_id']}\">{$row['emp_id']}.&nbsp;{$row['emp_fname']}&nbsp;{$row['emp_lname']}</a></b>";
echo "<br />";
}
?>
</div>
   <?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from tbl_emp_det where emp_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<center>
<span>Id:</span> <?php echo $row1['emp_id']; ?><br/>
<span>First Name:</span> <?php echo $row1['emp_fname']; ?><br/>
<span>Last Name:</span> <?php echo $row1['emp_lname']; ?><br/>
<span>Designation:</span> <?php echo $row1['emp_desg']; ?><br/>
<span>Gender:</span> <?php echo $row1['emp_gender']; ?><br/>
<span>Date of Birth:</span> <?php echo $row1['emp_dob']; ?><br/>
<span>Mobile:</span> <?php echo $row1['emp_mobile']; ?><br/>
<span>Date of Joining:</span> <?php echo $row1['emp_doj']; ?><br/>

<?php echo "<b><a href=\"delete_emp.php?del={$row1['emp_id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>";?>
</center>
</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
  
?>
   
</body>
</html>