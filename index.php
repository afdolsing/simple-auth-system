<?php 

session_start();
// cek apakah sudah login
if(!isset($_SESSION['login'])){
  header('Location:login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h3>Login Success</h3>
    
    </div>
    
</body>
</html>