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
padding-bottom:60px;	
padding-left:110px;
font-size:30px;	
}	
input[type=password]{
    width:auto;
	margin-left:50px;
	margin-top:10px;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit]
{
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
<h1 id="hf">Change Password </h1>
<form action="changepsw.php" method="POST"  >
<label>Enter Your Old Password:</label>&nbsp;
<input type="password" name="opsw"   placeholder="Old Password" required/></br>
<label> New Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="nwpsw"  placeholder="New Password" required/></br>
<label>Confirm Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="cnpsw" placeholder="Confirm Password" required/></br>
<input type="submit" name="submit"  id="submitbtn" value="Change" />
</form>
</div>
</article>
<?php
if(isset($_POST['submit']))
{
$host="localhost";
$user="root";
$pass="";
$db="healthwallet";
$conn=mysqli_connect($host,$user,$pass,$db)or die("connection failed");
$sql="SELECT * FROM patient  WHERE id=".$_SESSION['id'];
$resultset=mysqli_query($conn,$sql) or die("not updated");
$row=mysqli_fetch_array($resultset);	
if($row['password']==$_POST['opsw'])
{
	
 if($_POST['nwpsw']==$_POST['cnpsw'])
 {	 
    $nwpsw=$_POST['nwpsw'];
	$sql="UPDATE patient SET password = '$nwpsw' WHERE id=".$_SESSION['id'];
	$resultset=mysqli_query($conn,$sql) or die("not updated");
	if($resultset)
   { ?>
	<script>
	alert("Password is Changed ! Please Login");
	window.location="logout.php";
	 </script>
   <?php
   }
 }
 else
 {?>
     <script>
	alert("confirmation password is incorrect");
	</script>
 
 <?php 
 } 
}
else
{ ?>
    <script>
	alert("Please Enter Correct Password");
	</script>	
<?php	
}	
}
?>
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