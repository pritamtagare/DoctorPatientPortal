<?php session_start();
if(isset($_SESSION['did']))
{ ?>
<html>
<head>
<link href="../patient/css/gallery.css" rel="stylesheet">
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
<?php require("view.php"); ?>
<?php if(isset($_REQUEST['id1']))
{	
?>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");
// Get the image and insert it inside the modal - use its "alt" text as a caption

var img = document.getElementById('<?php echo $_REQUEST['id1'];?>');
var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = "<?php echo $_REQUEST['src'];?>";
    captionText.innerHTML = "<?php echo $_REQUEST['alt'];?>";


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() 
{ 
    window.history.back();
	modal.style.display = "none";
	
}
</script>
<?php } ?>

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