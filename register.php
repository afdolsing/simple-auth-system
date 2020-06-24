<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Sign Up</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <form action="register.php" method="POST">
                            <label>Sign Up</label>
                            <hr>
                    
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="username" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password2" placeholder="confirm password">
                            </div>
                            
                            <button type="submit" name="register" class="btn btn-register btn-block btn-success">REGISTER</button>
                        </form>
                </div>
            </div>
            <div class="text-center" style="margin-top: 15px">
                Do you have account? <a href="login-form.php">Login</a>
            </div>
        </div>
        
    </div>
    
</body>
</html>