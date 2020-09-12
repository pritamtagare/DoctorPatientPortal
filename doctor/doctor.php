<?php session_start();
if(isset($_SESSION['did']))
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

$query="SELECT * FROM doctor WHERE id=".$_SESSION['did']; 
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result) ;
  ?>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/login.png"  class="avatar"></td></tr>
  <tr><td><?php echo strtoupper($row['name']); ?></td></tr>
  <tr><td><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($row['qulification']); ?></td></tr>
  <tr><td><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;".$row['mobile']; ?></td></tr>
  <tr><td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['dob']; ?></td></tr>
  </table>
  </div>
  <div class="divnav">
  <ul type="none">
    <li><a class="anchr" href="doctor.php">View Shared Repords</a></li>
	<li><a class="anchr" href="ans.php">Ans Queries</a></li>
    <li><a class="anchr" href="edtprofile.php">Edit Profile</a></li>
	<li><a class="anchr" href="changepsw.php">Change Password</a></li></br>
	<li><a class="anchr" href="logout.php"><img height="20px" width="30px" src="../images/logout.png">Logout</a></li>
  </ul>
  </div>
  </nav>

<article>
<?php require("vwsharerpt.php"); ?>
<script>
function del()
{
var r=confirm("Do you Want to Delete Records");
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