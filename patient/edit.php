<?php session_start();
if(isset($_SESSION['id']))
{ ?>
<html>
<head>
<link href="../css/mystyle2.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/navigation.css" rel="stylesheet">
<link href="../css/footer.css" rel="stylesheet">
<style>
div.conta {
    width: 100%;
    border: 1px solid gray;
	margin-top:5%;
	background-image:url("../images/bkg.png");
	height:auto;
	}

.nav1 {
    float: left;
    width:225px;
    padding: 1em;
	
}
.divnav
{
margin-top:5%;
border:1px solid gray;
height:300px;
padding-top:15%;
padding-left:10%;
border-radius:12px;
background-color:#778899;
display: inline-block;
width:200px;	
}	

article {
    margin-left: 250px;
    border-left: 1px solid gray;
	padding: 1em;
    overflow: hidden;
	height:110%;
}
.anchr
{
text-decoration:none;
color:white;
font-size:16px;	
	
}	
.anchr:hover,.anchr:active
{
color:#FFD700;
underline:underline;
}
img.avatar {
    width:65%;
    border-radius: 50%;
}
.divtop
{
border:1px solid gray;
height:200px;
padding-top:5%;
padding-left:10%;
border-radius:12px;
background-color:white;
display: inline-block;
width:200px;
}
.ico
{
padding-left:90%;
}	
.divform
{
margin-left:20%;
padding-top:2%;
padding-left:7%;
border:1px solid gray;
background-color:white;
display: inline-block;
border-radius:15px;	
width:50%;
}
#hf
{
padding-bottom:40px;	
padding-left:140px;
font-size:30px;	
}	
input[type=text]{
    width:auto;
	margin-left:50px;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.upld{
	margin-left:50px;
    padding: 12px 20px;
    display: inline-block;
	cursor: pointer;
}
button {
    background-color: #00545f;
    color: white;
    padding: 12px 15px;
	margin-bottom:50px;
    margin-left:100px;
    margin-top:40px;
	border: none;
    cursor: pointer;
    width:250px;
}		
</style>
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
$db1="patient";
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
<div class="divform">
<h1 id="hf">Edit Report </h1>
<?php 
$conn2=mysqli_connect($host,$user,$pass,$db1)or die("connection failed");

$sql="SELECT * FROM  p".$_SESSION['id']." WHERE id=".$_REQUEST['id']; 
$resultset=mysqli_query($conn2,$sql);
$data=mysqli_fetch_array($resultset) ;

?>


<form action="#" enctype="multipart/form-data" method="POST">
<table>
<tr><td>
<label>Doctor Name</label></td><td><input type="text" value="<?php echo $data['d_name'];?>" name="doctor" /><td></tr>
<tr>
<td><label>Date</label></td><td><input type="text" name="date" value="<?php echo $data['rdate'];?>"/></td></tr>
<tr><td><label>Reason</label></td><td><input type="text" value="<?php echo $data['reason'];?>" name="reason" /><td></tr>
<tr><td><label>Uploaded Report</label></td><td><img class="upld" src="<?php echo $data['path'];?>" height="250px" width="200px"/></td></tr>
<tr><td colspan="2"><button type="submit"  name="submit" >Update</button></td></tr>
</table>
</form>
<?php 
if(isset($_POST['submit']))
{	
	$d_name=$_POST['doctor'];
	 $date=$_POST['date'];
	$reason=$_POST['reason'];
	$sql="UPDATE p".$_SESSION['id']." SET d_name = '$d_name', rdate = '$date' , reason= '$reason' WHERE id=".$_REQUEST['id'];
	$resultset=mysqli_query($conn2,$sql) or die("not updated");
	if($resultset)
   { ?>
	<script>
	alert("updated Successfully");
	window.location="viewrprt.php";
     
	</script>
   <?php } 


}
?>
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
}	
?>