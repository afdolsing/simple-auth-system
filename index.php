<?php 
session_start();

// cek session dari login
if(!isset($_SESSION['login'])){
    // jika tidak ada session kembalikan ke login
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Index</title>
</head>
<body>
    <div align="center" style="margin-top: 100px;">
        <h3>Login Success</h3>
        <a href="logout.php" class="btn btn-sm btn-danger">Log out</a>    
    </div>

</body>
</html>