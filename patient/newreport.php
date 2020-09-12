<?php
session_start();
if(isset($_POST['submit']))
{	
define ("MAX_SIZE","10000"); 
//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 		}

?>
<?php
$host="localhost";
$user="root";
$pass="";
$db2="patient";
$conn2=mysqli_connect($host,$user,$pass,$db2)or die("connection failed");

     $d_name=$_POST['doctor'];
	 $date=$_POST['date'];
	$reason=$_POST['reason'];
	$image=$_FILES['myfile']['name'];
 	if($image) 
 	{
 	
 $filename = stripslashes($_FILES['myfile']['name']);
 $extension = getExtension($filename);
 $extension = strtolower($extension);
 $size=filesize($_FILES['myfile']['tmp_name']);
 $image_name=time().'.'.$extension;
 $newname="uploads/p".$_SESSION['id']."/".$image_name;
 $copied = copy($_FILES['myfile']['tmp_name'], $newname);
		if ($copied) 
		{
			$tablename="p".$_SESSION['id'];
		$query = "INSERT INTO ".$tablename."(d_name, rdate, reason, path)VALUES ('$d_name', '$date', '$reason', '$newname')";
       $data =mysqli_query($conn2,$query) or die(mysqli_error());   
   if($data)
   { ?>
<html>
<head>
	<script>
	alert("uploaded Successfully");
	window.location="patient.php";
     
	</script>
	</head>
</html>
	<?php	}
	}
   else{
	die("not uploaded");
    }
 
}
}
else
{
header("location:newrpt.php");

}	
	
?>
