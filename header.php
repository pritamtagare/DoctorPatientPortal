<?php
echo '<html>
<head>
<title>healthwallet</title>
<!-- Styles -->
<link href="css/mystyle2.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/navigation.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
</head>
<body>
<!*******************TOP NAVIGATION ****************-->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Home</a></br>
    <a href="loginpage.php">Login</a></br>
	<a href="signup.php">New Registration</a></br>
	<a href="govschemes.php">Goverment Schemes</a></br>
    <a href="freeconsultation.php">Free Consultation</a></br>
	<a href="contactform.php">Contact Us</a></br>
	
  </div>
</div>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>


<!--******************** NAVBAR ********************-->
<div>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <div class="logo">
          <h1 class="brand"><a href="index.php">healthwallet</a></h1>
        </div>
        <nav class="pull-right nav-collapse collapse">
          <ul id="menu-main" class="nav">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><a title="Home" href="index.php">Home</a></li>
          <li><a title="MemberShip" href="govschemes.php">Goverment Schemes</a></li>
            <li><a title="Sign Up" href="freeconsultation.php">Free Consultation</a></li>
            <li><a title="login" href="contactform.php">Contact Us</a></li>
		<li><span style="font-size:30px;cursor:pointer;color:white;padding-left:140px;" onclick="openNav()">&#9776;</span></li>
          </ul>
        </nav>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar-inner -->
  </div>
  <!-- /.navbar -->
</div>';
?>
