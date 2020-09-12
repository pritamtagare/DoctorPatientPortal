<html>
<head> 
<style>
.divform
{
padding-top:19%;
padding-left:75%;
text-align:center;	
}
.bgtbl
{
background-image:url("images/MAIN.jpg");		
text-align:right;
height:140%;
width:auto;
}
form {
    border-radius:12px;
	width:310px;
    height:390px;
	text-align:"center";
	background-image:url("images/bkg.png");
	opacity:0.9;
	display: inline-block;
	border: 1px solid rgba(147, 184, 189,0.8);
	box-sizing: border-box;
	}

input[type=text], input[type=password] {
    width:auto;
    padding: 10px 15px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #2a3c4d;
    color: white;
    padding: 12px 15px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:170px;
}
a
{
	
color:#125643;	
}	
.cancelbtn {
    width:80px;
   padding: 12px 15px;
    background-color: #ff4336;
}


img.avatar {
    width:40%;
    border-radius: 50%;
}

</style>
</head>
<body>
<script>
function back()
{
window.location="index.php";	
}	
</script>
<div class="bgtbl">
<div class="divform">
<form action="login.php" method="POST">
</br><img src="images/login1.png"  class="avatar"></br></br>
<label><b>Mobile No</b></label>
<input type="text" placeholder="Enter Registered Mobile " name="uname" required></br></br>
<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required></br></br>
<button type="submit" name="submit">Login</button>
<button type="click" name="btn"  action="return back()" class="cancelbtn">Cancel</button></br></br> 
<a href="signup.php" >Not Yet Registered ? <u>sign up</u> </a>
</form>
</div>
</div>
</body>
</html>