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
padding-left:40px;
font-size:30px;	
}	
input[type=submit]
{
    background-color: #00545f;
    color: white;
    padding: 12px 15px;
	margin-bottom:30px;
    margin-left:115px;
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
	<li><a class="anchr" href="changepsw.php">Change Password</a></li></br><marquee>
	<a  class="anchr" href="viewans.php">View Answers of Your Queries</a></marquee>
	</br></br>
	<li><a class="anchr" href="logout.php"><img height="20px" width="30px" src="../images/logout.png">Logout</a></li>
  </ul>
  </div>
  </nav>
<script>
function del()
{
var r=confirm("Do you Want to Delete Query");
if (r==true)
  {
window.location="delete.php";
  }
else
  {
 return false
  }
}
</script>
<article>
<div class="ico">
<a href="newrpt.php"><img height="70px" width="70px" src="../images/newrpt.ico" alt="new report"></a>
</div>
<div class="divform">
<h1 id="hf">Answers of Your Queries </h1>
<?php
$sql="SELECT * from quries where pid=".$_SESSION['id']; 
$data=mysqli_query($conn,$sql);
if(isset($data))
{
while($row=mysqli_fetch_array($data))
{
echo"</br>Query:&nbsp;".$row['id']."&nbsp;&nbsp;".$row['quetion'];
echo"</br>Answers:&nbsp;&nbsp;&nbsp;".$row['ans'];?>
<a href="deleteqry.php?id=<?php echo$row['id']; ?>"><img  src="../images/delete.png" onClick="return del()"  alt="delete" width="23" height="23"/></a>	
<?php
echo"</br>";
}
}
else
{
?>
<h4 class="hf"><a>Oops ! No Registrered Doctors Available </a></h4>
<?php 
}
?>
</br></br></br></br></br></br>
</div>
</article>
</div>
<?php
}
else
{
header("location:../index.php");
}	
?>
<?php require("../footer.php"); ?>
</body>
</html>
