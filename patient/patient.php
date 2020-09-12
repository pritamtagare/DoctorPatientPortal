<?php session_start();
if(isset($_SESSION['id']))
{ ?>
<html>
<head>
<link href="../css/mystyle2.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/footer.css" rel="stylesheet">
<link href="css/patient.css" rel="stylesheet">
</head>
<body>
<?php require("../newheader.php"); ?>
<div class="conta">
<nav class="nav1" >
  <div class="divtop">
  <table align="center">
  <?php
$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$conn=mysqli_connect($host,$user,$pass,$db)or die("connection failed");

$query="SELECT * FROM patient WHERE id=".$_SESSION['id']; 
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result) ;
  ?>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/login.png"  class="avatar"></td></tr>
  <tr><td><?php echo strtoupper($row['name']); ?></td></tr>
  <tr><td><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;".$row['mobile']; ?></td></tr>
  <tr><td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['dob']; ?></td></tr>
  </table>
  </div>
  <div class="divnav">
  <ul type="none">
    <li><a class="anchr" href="newrpt.php">New Report</a></li>
    <li><a class="anchr" href="patient.php">View Reports</a></li>
    <li><a class="anchr" href="viewrprt.php">View Records</a></li>
	<li><a class="anchr" href="ask.php">ASk Queries</a></li>
    <li><a class="anchr" href="srrpt.php">Share Report</a></li>
    <li><a class="anchr" href="edtprofile.php">Edit Profile</a></li>
	<li><a class="anchr" href="changepsw.php">Change Password</a></li></br>
	<li><a class="anchr" href="logout.php"><img height="20px" width="30px" src="../images/logout.png">Logout</a></li>
  </ul>
  </div>
  </nav>

<article>
<div class="ico">
<a href="newrpt.php"><img height="70px" width="70px" src="../images/newrpt.ico" alt="new report"></a>
</div>
<h1 id="hf">Reports Gallery</h1>
<?php require("gallary.php");?>
</div>
</article>
</div>
<?php require("../footer.php"); ?>
</body>
</html>
<?php
}
else
{
header("location:../index.php");
}	?>