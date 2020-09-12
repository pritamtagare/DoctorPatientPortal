<?php session_start(); ?>
<html>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<body>
<?php
if(isset($_POST['submit']))
{	
$username=$_POST['uname'];
$password=$_POST['psw'];
$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$conn=mysqli_connect($host,$user,$pass,$db)or die("connection failed");
$query="SELECT id,mobile,password FROM patient WHERE mobile='$username' AND password='$password' "; 
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result) ;
if($row)
{
	echo $row['id'];
$_SESSION['id']=$row['id'];
header("location:patient/patient.php");	
}
else
{
$query1="SELECT id,mobile,password FROM doctor WHERE mobile='$username'AND password='$password' "; 
$result1=mysqli_query($conn,$query1)or die("doctor not connected");
$row1=mysqli_fetch_array($result1) ;
 if($row1)
 {  

	$_SESSION['did']=$row1['id'];
	header("location:doctor/doctor.php");	
	
 }
 
 else
 {?>
	  <script>
	  function back()
          {
		   window.location="index.php";
		  }
	  
	   </script>
	<div class="alert">
<span class="closebtn" onclick="return back()">&times;</span> 
<strong>INVALID</strong> USERNAME OR PASSWORD !  &nbsp;&nbsp;&nbsp;&nbsp;please enter correct username and password 
</div>
	  <?php 
       }  
	} 
 
 }
else
{
header("location:index.php");
}	
?>
</body>
</html>