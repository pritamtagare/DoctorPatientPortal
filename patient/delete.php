<?php session_start(); ?>
<html>
<body>
<?php 
if($_REQUEST['id'])
{
$host="localhost";
$user="root";
$pass="";
$db1="patient";
$conn2=mysqli_connect($host,$user,$pass,$db1)or die("connection failed");
$sql="SELECT * FROM  p".$_SESSION['id']." WHERE id=".$_REQUEST['id']; 
$resultset=mysqli_query($conn2,$sql);
$data=mysqli_fetch_array($resultset);
$del=unlink($data['path'])or die("file is not deleted");
$sql="DELETE FROM  p".$_SESSION['id']." WHERE id=".$_REQUEST['id'];
$resultset=mysqli_query($conn2,$sql) or die("not Deleted");
?>
<script>
window.location="viewrprt.php";
</script>
<?php
}	
?>
</body>
</html>