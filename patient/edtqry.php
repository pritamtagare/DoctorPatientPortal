<?php session_start(); ?>
<html>
<body>
<?php 

if(isset($_POST['submit']))
{	$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$conn=mysqli_connect($host,$user,$pass,$db)or die("connection failed");
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$dob=$_POST['dob'];
	$sql="UPDATE patient SET name = '$name', address = '$addr' , email= '$email',mobile= '$mobile',dob= '$dob' WHERE id=".$_SESSION['id'];
	$resultset=mysqli_query($conn,$sql) or die("not updated");
	if($resultset)
   { ?>
	<script>
	alert("updated Successfully");
	window.location="edtprofile.php";
     
	</script>
  <?php }
}    
?>
</body>
</html>