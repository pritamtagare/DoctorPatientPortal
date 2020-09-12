<?php 
if(!(isset($_SESSION['did'])))
{	
session_start();
}
?>

<html>
<head>
<style>
.table8777 {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
	text-align:center;
	}

.table8777: th, :td {
    border: none;
    text-align: center;
    padding: 8px;
}
th
{
padding-bottom:20px;	
}	

.table8777 tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<div style="overflow-x:auto;">
  <table class="table8777">
    <tr>
      <th>Patient Name</th>
      <th>Mobile Number</th>
      <th>View</th>
      <th>Delete</th>
    </tr>

<?php    
$host="localhost";
$user="root";
$pass="";
$db2="doctor";
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");
$query="SELECT * FROM s".$_SESSION['did']; 
$result=mysqli_query($conn2,$query);
 ?>
<div>
<?php 
while($row=mysqli_fetch_array($result))
{ ?>
	

    <tr>
     
	  <td><?php echo strtoupper($row['p_name']); ?></td>
      <td><?php echo strtoupper($row['mobile']); ?></td>
      <td><a href="sharereport.php?id=<?php echo$row['pid']; ?>"><img  src="../images/view.png"  alt="view" width="25" height="25"/></a></td>
      <td><a href="delete.php?id=<?php echo$row['pid']; ?>"><img  src="../images/delete.png" onClick="return del()"  alt="delete" width="23" height="23"/></a></td>
    </tr>
	<?php 
	 }
?>

  </table>
</div>
</body>
</html>
