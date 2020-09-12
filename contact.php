<?php
	if(isset($_POST['submit']))
	{
		$host="localhost";
        $user="root";
		$pass="";
		$db="healthwallet";
		$conn=mysqli_connect($host,$user,$pass,$db)or die("connection failed");
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mbno=$_POST['mob'];
		$message=$_POST['comment'];
		$query = "INSERT INTO contact(name,email,mobileno,message)VALUES('$name','$email','$mbno','$message')";
		$result = mysqli_query($conn,$query);    
		if($result==TRUE)
		{
		echo"<script>alert('Thank You'); </script>";	
		 header("location:contactform.php");		
		}
		else
		{
		echo"<script>alert('Failed to submit,please tyr later'); </script>";
		header("location:contactform.php");	
			
		}
	}

?>