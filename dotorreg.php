<?php
if(isset($_POST['submit']))
{	
$name=$_POST['name'];
$quli=" ";
$quli=$_POST['quli']; 
$spec=$_POST['spec'];
$gend=$_POST['gend'];
$addr=$_POST['addr'];
$pin=$_POST['pin'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$psw=$_POST['psw'];

$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$db2="doctor";
$conn2 = mysqli_connect($host,$user,$pass,$db2) or die("can not connect db2");
$conn = mysqli_connect($host,$user,$pass,$db) or die("can not connect");	
$query = "INSERT INTO doctor (name, qulification, spaciality, gender, address, pincode, email, mobile, dob, password)
 VALUES ('$name', '$quli', '$spec', '$gend', '$addr', '$pin', '$email', '$mobile', '$dob', '$psw')";
$data = mysqli_query($conn,$query) or die(mysqli_error());   
   if($data)
   {  $query1 = "SELECT * FROM doctor WHERE  mobile=".$mobile;
     $row= mysqli_query($conn,$query1);
	 $row1=mysqli_fetch_array($row)or die(mysqli_error());
   	if($row1)
	{	
	$tablename="s".$row1['id'];
	$sql="CREATE TABLE ".$tablename." (id INT( 20 ) NOT NULL AUTO_INCREMENT ,pid INT( 20 ) NOT NULL,p_name VARCHAR( 200 ) NOT NULL ,mobile VARCHAR( 20 ) NOT NULL ,PRIMARY KEY ( id ))";
	$create = mysqli_query($conn2,$sql) or die(mysqli_error());
	if($create)
	{
		
	   	  
	?>  
		<script>
	  alert("Thank you for Registration ,PLEASE LOGIN TO CONTINUE");
	 window.location="patientreg.html";
	  </script>
 <?php  
   }
	}
   }
}   
?>