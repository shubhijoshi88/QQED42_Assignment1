<?php
include("config.php");
session_start();

if (!isset($_SESSION["role"]))
{
   header("location: Login.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Welcome to Home Page";
?> 

</body>
</html> 