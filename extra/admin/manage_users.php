<?php

include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['user_id'];

/*this is delet quer*/
mysqli_query($con,"delete from registered_service_providers where user_id='$user_id'")or die("query is incorrect...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="style/js/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Manage User </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>User Name</th>
                <th>User Password</th>
	<th><a href="add_user.php">Add New</a></th></tr>	
<?php 
$result=mysqli_query($con,"select user_id, email, passwords from registered_service_providers")or die ("query 2 incorrect.......");

while(list($user_id,$first_name,$passwords)=
mysqli_fetch_array($result))
{
echo "<tr><td>$first_name</td><td>$passwords</td>";

echo"<td>
<a href='edit_user.php?user_id=$user_id'>Edit</a>
<a href='manage_users.php?user_id=$user_id&action=delete'>Delete</a>
</td></tr>";
}
mysqli_close($con);
?>
</table>
</div>	
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>