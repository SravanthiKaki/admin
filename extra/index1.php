<?php

include("db.php");

if(isset($_POST['btn_save']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$passwords=$_POST['passwords'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

mysqli_query($con,"insert into registered_service_providers(first_name, last_name,email,passwords,mobile,address1,address2) values ('$first_name','$last_name','$email','$passwords','$mobile','$address1','$address2')") 
			or die ("Query 1 is inncorrect........");

mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Employee Registration form</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="style/js/jquery.min.js"></script>
</head>
<body>


<div class="container-fluid">


  <div class="col-sm-9 " align="center">	
  <div class="panel-heading" style="background-color:#c4e17f;">
	<h1>Employee Registration</h1></div><br>
	
<form action="index1.php" name="form" method="post">
<div class="col-sm-6">
    <input name="first_name" class="input-lg" type="text"  id="first_name" style="font-size:18px; width:330px" placeholder="First Name" autofocus required><br><br>
</div>
<div class="col-sm-6">
<input name="last_name" class="input-lg" type="text"  id="last_name" style="font-size:18px; width:330px" placeholder="Last Name" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
    <input name="email" class="input-lg" type="text"  id="email" style="font-size:18px; width:330px" placeholder="Email" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
<input name="passwords" class="input-lg" type="text"  id="passwords" style="font-size:18px; width:330px"  placeholder="Password" required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="mobile" class="input-lg" type="phone"  id="mobile" style="font-size:18px; width:330px" placeholder="Phone No" autofocus required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="address1" class="input-lg" type="text"  id="address1" style="font-size:18px; width:330px" placeholder="Address1" autofocus required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="address2" class="input-lg" type="text"  id="address2" style="font-size:18px; width:330px" placeholder="Address2" autofocus required><br><br>
    </div>
<div class="col-sm-7" style="margin:20px;margin-left:90px;">
    <button type="submit" class="btn btn-success btn-block center" name="btn_save" id="btn_save" style="font-size:18px">Submit</button></div>
</form>
</div></div>

</body>
</html>