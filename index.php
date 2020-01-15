<?php
include("config.php");
session_start();

if(isset($_COOKIE["username"])) {
   $myusername = mysqli_real_escape_string($db,$_COOKIE["username"]);
   $mypassword = mysqli_real_escape_string($db,$_COOKIE['password']); 
   
   $sql = "SELECT id FROM user_data WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);
   $count = mysqli_num_rows($result);

   if($count == 1) {
      //  session_register("myusername");
       $_SESSION['login_user'] = $myusername;
       $_SESSION["role"] = "admin";
       header("location: Home.php");
    }else {
      header("location: Login.php");
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Welcome to Index Page";
?> 


</body>
</html> 