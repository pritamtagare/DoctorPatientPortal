<html>
<head>
<link href="css/gallery.css" rel="stylesheet">
</head>
<body>
<?php 
$host="localhost";
$user="root";
$pass="";
$db2="patient";
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");
$query="SELECT * FROM p".$_SESSION['id']; 
$result=mysqli_query($conn2,$query);
 ?>
<div class="reports">
<?php 
while($row=mysqli_fetch_array($result))
{ ?>
<a href="patient.php?id1=<?php echo $row['id']; ?>& src=<?php echo$row['path']; ?> & alt=<?php echo $row['rdate']; ?>" > <img  src="<?php echo$row['path']; ?>" " alt="<?php echo $row['rdate']; ?>" width="200" height="150"/> </a>	
<?php }
?>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<?php if(isset($_REQUEST['id1']))
{	
?>
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
    modal.style.display = "none";
}
</script>
<?php } ?>
</body>
</html>
