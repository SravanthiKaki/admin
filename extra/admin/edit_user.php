<?php

include("../db.php");
$user_id=$_REQUEST['user_id'];

$result=mysqli_query($con,"select user_id, email, passwords from registered_service_providers where user_id='$user_id'")or die ("query 1 incorrect.......");

list($user_id,$user_name,$passwords)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{
$user_name=$_POST['email'];
$passwords=$_POST['passwords'];

mysqli_query($con,"update registered_service_providers set email='$user_name', passwords='$passwords' where user_id='$user_id'")or die("Query 2 is inncorrect..........");

header("location: manage_users.php");
mysqli_close($con);
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
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    
	<div class="col-md-9 content" align="center">  
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Edit User Details </h1></div><br>
<form action="edit_user.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>" />


<div class="col-sm-7 ">
    <label style="font-size:18px;">Email</label><br>
    <input class="input-lg" style="font-size:18px; width:200px" name="email" type="text"  id="email" value="<?php echo $user_name; ?>" autofocus><br><br>
    </div>


<div class="col-sm-7 ">
<label style="font-size:18px;">passwords</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="passwords" type="text"  id="passwords" value="<?php echo $passwords; ?>">
    <br><br></div>
    <div class="col-sm-7">
        <button type="submit" class="btn btn-success " name="btn_save" id="btn_save" style="font-size:18px">Submit</button></div>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>