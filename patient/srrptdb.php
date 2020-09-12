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
	min-height:110%;
	max-height:auto;
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
padding-left:11%;
border:1px solid gray;
background-color:white;
display: inline-block;
border-radius:15px;	
width:35%;
height:28%;

}
#hf
{	
padding-left:40px;
font-size:30px;	
}	
input[type=number]{
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
    margin-left:110px;
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
<?php
if(isset($_POST['submit']))
{
$query="SELECT * FROM doctor WHERE pincode=".$_POST['pin']; 
$result=mysqli_query($conn,$query )or die("not selected");
if($row=mysqli_num_rows($result))
{
while($row1=mysqli_fetch_array($result))
	{	?>
<div class="divform">
<h1 class="hf">Doctor details</h1>
</br>
<label>Name:</label>&nbsp;<?php echo $row1['name']; ?></br>
<label>Address:</label>&nbsp;<?php echo $row1['address']; ?> &nbsp;&nbsp;<?php echo$row1['pincode']; ?></br>
<label>Qulification:</label>&nbsp;<?php echo $row1['qulification']; ?></br>
<label>Specility:</label>&nbsp;<?php echo $row1['spaciality']; ?></br>
<a href="share.php?did=<?php echo $row1['id']; ?>">share</a>
</br></br></br>
</div>
<?php
}
}
else
{
?>
<div class="divform">
</br></br></br></br>
<h4 class="hf"><a>Oops ! No Registrered Doctors Available </a></h4>
</div>
<?php
}	

?>
</article>
</div>
<?php require("../footer.php"); ?>
</body>
</html>
<?php
}
}
else
{
header("location:../index.php");
}	
?>