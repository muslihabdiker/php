<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include '../conn.php';
if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

  
    if(!$username) {
     echo "Null username received";
    }elseif(!$password){
        echo "Null password received";
    }else{

    }
    $sql = "SELECT * FROM `members` WHERE username = '$username'";
    $query = mysqli_query($conn,$sql);
    if($query) {
        echo "username found"."<br>";
    
    }else{
        echo "no record found";
    }
    $result = mysqli_fetch_assoc($query);
    $dbhashedpwd = $result['password'];

    if (password_verify($password, $dbhashedpwd)) {
        echo 'Password is valid!';
    } else {
        echo 'password hashes do not match';
    }
   
  
}else {
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form action="" method="post">
        <h1>login</h1>
         <input type="text" placeholder="username" name="username" required>
         <input id="myInput" type="password" placeholder="password" name="password"  required>
         <input type="checkbox" onclick="myFunction()">Show Password
         <button type="submit" name="submit">Register</button>

    </form>

    <script>
        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>
</body>
</html>