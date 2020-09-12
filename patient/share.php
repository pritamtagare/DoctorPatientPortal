<?php
session_start();
if(isset($_SESSION['id']))
{	

$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$db2="doctor";
$conn=mysqli_connect($host,$user,$pass,$db)or die("connection failed");
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");

	 $query = "SELECT * FROM  patient where id=".$_SESSION['id'];
       $data =mysqli_query($conn,$query) or die(mysqli_error());   
	$row=mysqli_fetch_array($data);
   if($row)
   {
		$pid=$row['id'];
		$name=$row['name'];
		$mobile=$row['mobile'];
		$did=$_REQUEST['did'];
		$sql="INSERT INTO s".$did."(id,pid,p_name,mobile)VALUES(NULL,'$pid','$name','$mobile')";	
		$result =mysqli_query($conn2,$sql) or die(mysqli_error());
	if(isset($result))
	{
?>
<html>
<head>
	<script>
	alert("Shared with doctor Successfully");
	window.location="patient.php";
     
	</script>
	</head>
</html>
	<?php	}
	}
   else{
	die("not Shared");
    }

}
else
{
 echo"not entered";


}	
	
?>
