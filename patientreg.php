<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$addr=$_POST['addr'];
$gend=$_POST['gend'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$psw=$_POST['psw'];

$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$db2="patient";
$conn = mysqli_connect($host,$user,$pass,$db) or die("can not connect to database healthwallet");
$conn2= mysqli_connect($host,$user,$pass,$db2) or die("can not connect to database patient");	

$query = "INSERT INTO patient(name, address, gender, email, mobile, dob, password) 
VALUES ('$name', '$addr', '$gend', '$email', '$mobile', '$dob','$psw')";
$data =mysqli_query($conn,$query);   
   if($data)
   {
   $query1= "SELECT * FROM patient WHERE  mobile=".$mobile;
   $row= mysqli_query($conn,$query1);
	$row1=mysqli_fetch_array($row)or die(mysqli_error());
	if($row1)
	{	
	$tablename="p".$row1['id'];
	$sql="CREATE TABLE ".$tablename." (id INT( 20 ) NOT NULL AUTO_INCREMENT ,d_name VARCHAR( 200 ) NOT NULL ,rdate VARCHAR( 100 ) NOT NULL ,reason VARCHAR( 500 ) NOT NULL ,path VARCHAR( 500 ) NOT NULL ,PRIMARY KEY ( id ))";
	$create = mysqli_query($conn2,$sql) or die(mysqli_error());
	if($create)
	{ 	

		$path="patient/uploads/".$tablename;
        mkdir($path,0777) or die("Diretory not created");
	  ?>  
		<script>
	  alert("Thank you for Registration ,please  LOGIN to continue..");
	 window.location="patientreg.html";
	  </script>
 <?php  }
   }
}
}
else
{	
header("location:index.php");	
}	
?>