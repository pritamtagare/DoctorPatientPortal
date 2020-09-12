<html>
<head>
<link href="css/gallery.css" rel="stylesheet">
</head>
<body>
<?php 
if(isset($_REQUEST['id']))
{	
$host="localhost";
$user="root";
$pass="";
$db2="patient";
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");
$query="SELECT * FROM p".$_REQUEST['id']; 
$result=mysqli_query($conn2,$query);
 ?>
<div class="reports">
<?php 
while($row=mysqli_fetch_array($result))
{ ?>
<a href="sharereport.php?id=<?php echo $_REQUEST['id']?>&id1=<?php echo $row['id'];?>& src=<?php echo"../patient/".$row['path']; ?> & alt=<?php echo $row['rdate']; ?>" > <img  src="<?php echo"../patient/".$row['path']; ?>" " alt="<?php echo $row['rdate']; ?>" width="200" height="150"/> </a>	
<?php }
}
?>

<!-- The Modal -->
</body>
</html>
