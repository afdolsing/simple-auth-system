<?php

require('functions.php');

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE
            username = '$username'");

    // cek username
    /* mysqli_num_rows -> fungsi untuk menghitung ada brp baris yg dikembalikan dari database 'SELECT * FROM' 
        kalau ketemu pasti nilai satu, kalau tidak nilai 0
    */
    if (mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        // mengecek string sama atau tidak dengan hash
       if( password_verify($password, $row['password'])){
           header('Location: index.php');
           exit;
       }

    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Login</title>
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        <form method="POST">
                            <label><h4>Sign In</h4></label>
                            <hr>
                    
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="admin" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="123" required>
                            </div>
                            <div>
                                <?php if(isset($error)): ?>
                                        <p style="color: red;">wrong username or password!</p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" >
                                <label>Remember me</label>
                            </div>
                            
                            
                            <button type="submit" name="login" class="btn btn-register btn-block btn-success">LOGIN</button>
                        </form>
                </div>
            </div>
            <div class="text-center" style="margin-top: 15px">
             Do you have no account yet? <a href="register.php">Sign Up</a>
            </div>
        </div>
        
    </div>
    
</body>
</html>