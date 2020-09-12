<?php session_start();
if(isset($_REQUEST['id']))
{
$host="localhost";
$user="root";
$pass="";
$db2="doctor";
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");
$sql="DELETE FROM  s".$_SESSION['did']." WHERE  pid=".$_REQUEST['id']; 
$resultset=mysqli_query($conn2,$sql);
if($resultset)
{	
?>
<html>
<head>
<script>
window.history.back();
</script>
</head>
</html>
<?php
}
}
?>