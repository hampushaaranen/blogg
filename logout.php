<?php
session_start();

session_destroy(); 
if( !session_is_registered('id')){ 
$msg = "You are now logged out";
} else {
$msg = "<h2>could not log you out</h2>";
} 
?> 
<html>
<body>
<?php echo "$msg"; ?><br>
<p><a href="index.php">Click here</a> to return to our home page </p>
</body>
</html>