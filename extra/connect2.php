<?php

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$address1=$_POST['address1'];
$address2=$_POST['address2'];

$passwords=$_POST['passwords'];



    $host="localhost";
    $dbUsername="root";
    $dbPassword=" ";
    $dbname="test4";

    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
   
   
   //Previous
    if(mysqli_connect_error()){
        echo "Connection Error";
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else{
        echo "connection successful";

        echo $first_name;
        
        $sql="INSERT INTO registered_service_providers(first_name,last_name,email,mobile,address1,address2,passwords) VALUES('$first_name','$last_name','$email',$mobile,'$address1','$address2','$passwords')";
        

        if($conn->query($sql)==TRUE)
        {
            echo "New record Created";
        }
        else{
            echo "Error";
        }

        $conn->close();}
      /*  $stmt->execute();
       
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssisssssis",$first_name,$last_name,$email,$mobile,$gender,$address1,$address2,$city,$country,$zip,$password);
           $stmt->execute();
           echo "New record inserted successfully";
        }
        else{
            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();

    }
    */




?>

