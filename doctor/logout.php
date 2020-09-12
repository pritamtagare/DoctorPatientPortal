<?php 
session_start();
?>
<html>
<body>
<script>
alert("thank you ! visit again");
</script>

<?php
session_destroy();
header("location:../index.php");
?>
<script>
alert("thank you for login ! visit again");
</script>
</body>
</html>