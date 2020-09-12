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
      <th>Report</th>
      <th>Date</th>
      <th>Reason</th>
      <th>Doctor Name</th>
      <th>View</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

<?php    
$host="localhost";
$user="root";
$pass="";
$db2="patient";
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");
$query="SELECT * FROM p".$_SESSION['id']; 
$result=mysqli_query($conn2,$query);
 ?>
<div>
<?php 
while($row=mysqli_fetch_array($result))
{ ?>
	

    <tr>
      <td><a href="viewrprt.php?id1=<?php echo$row['id']; ?>&src=<?php echo$row['path']; ?>&alt=<?php echo $row['rdate'];?>"  ><img  src="<?php echo$row['path']; ?>"  alt="File not Found" width="80" height="60"/></a></td> 
	  <td><?php echo strtoupper($row['rdate']); ?></td>
      <td><?php echo strtoupper($row['reason']); ?></td>
      <td><?php echo strtoupper($row['d_name']); ?></td>
      <td><a href="viewrprt.php?id1=<?php echo$row['id']; ?>&src=<?php echo$row['path']; ?>&alt=<?php echo $row['rdate'];?>"  ><img  src="../images/view.png"  alt="view" width="25" height="25"/></a></td>
      <td><a href="edit.php?id=<?php echo$row['id']; ?>"><img  src="../images/edit.png"  alt="edit" width="25" height="25"/></a></td>
      <td><a href="delete.php?id=<?php echo$row['id']; ?>"><img  src="../images/delete.png" onClick="return del()"  alt="delete" width="23" height="23"/></a></td>
    </tr>
	<?php }
?>

  </table>
</div>
</body>
</html>
