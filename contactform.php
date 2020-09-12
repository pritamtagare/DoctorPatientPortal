<html>
<head>
<style>
article
{
margin-left:100px;	
	
}
form
{
width:200px;
color:#4f555g;
align:center;
}

input[type=text],input[type=email]
{
width: 100%;
height: 40px;
padding: 5px;
margin-bottom: 25px;
margin-top: 5px;
border: 2px solid #ccc;
color: #4f554f;
font-size: 16px;
border-radius: 5px;
}

textarea
{

width: 400px;
height: 40px;
padding: 5px;
margin-bottom: 25px;
margin-top: 5px;
border: 2px solid #ccc;
color: #4f4f4f;
font-size: 16px;
border-radius: 5px;
}

input[type="password"]
{
border:none;
margin-left:120px;
}

input[type="submit"]
{
margin-left:120px;
margin-top:20px;
border:none;
padding-top:15px;
padding-bottom:15px;
padding-left:50px;
padding-right:50px;
background-color:#ffabcf;
}

.field
{
text-align:center;
width:500px;
height: 550px;
background-image:url("images/bag01.jpg");
border-radius:18px;
color:red;
}

.table1
{
padding:40px 40px;
width:auto;
text-align:center;
background-image:url("images/bag01.jpg");
border-radius:18px;
border:1px solid;
color:white;
}
.myfield
{
text-align:center;
width:450px;
height: 520px;
background-image:url("images/bag01.jpg");
border-radius:18px;
color:red;	
boder:2px solid;	
margin-left:30px;
padding-left:100px;
padding-top:50px;
}

</style>

<script type="text/javascript">
function fn()
			{
				var str="AZaz09";
			for(i=0 ;i<str.length ;i++)
				{
					alert(str.charCodeAt(i));
			}
			}
function validateForm() {
   
   var con = document.forms["myform"]["mb"].value;
   var email = document.forms["myform"]["email"].value;
   
				 if (!(con.length == 10))
				{
					alert("number length should be  10 digits");
					
					return 1;
				}
				if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
				alert("invalid email");
				return 1;
				}
						
		return 0;
	  
	  
	}


</script>
<script>
		 function check() {
			
			 var result = validateForm();
			 if(result==1){
							   
			   return false;
		     }
			 else {
		    return true;
			 }
		}
		
 </script>
</head>
<body background="images/1.jpg">

<?php require("header.php"); ?>
<br><br><br>
<article>
<div>
  <table  height="400" cellspacing="50px">
  <tr><td>
  
  <fieldset class="field">
  <legend><h1><img src="images/03.png" height="100px" width="100px"></h1></legend>
  <table class=" table1" align="center">
  <tr><td><h1>healthwallet</br></br></br></h1></td></tr>
  <tr><td><h4>Yogesh , pritam & pradip</h4> </td></tr>
  <tr><td><h4>contact@healthwallet.com</h4></td></tr>
  <tr><td><h4>9028924770 </h4></td></tr>
 <tr><td><h4></br></br></br></br>Deogiri college ,Aurangabad - 431005. </h4></td></tr>
 </table> 
 </fieldset>
  </td>
  <td>
  <div> 
<fieldset class="myfield">   
<legend><center><br><img src="images/msg.png"height="100px" width="100px"></b></center></legend>
  <form action="contact.php" method="post">
  <table align="center" >
 <tr><td><input type="text" name="name" placeholder="Name" required/><br></td></tr>
  <tr><td><input type="email" name="email" placeholder="E-mail" required/><br></td></tr>
  <tr><td><input type="text" name="mob" placeholder="Mobile No"  required/><br></td></tr>
  <tr><td><textarea rows="10" cols="40" required placeholder="Write Message Here" name="comment"/></textarea>
  </td></tr>
  <tr><td><input type="submit" value="SEND" name="submit"/></td></tr>
  </table>
  </form>
  </div>
  </td>
  </tr>
  </table>
</div>  
</fieldset>
</article>

<?php require("footer.php"); ?>
</body>
</html>
