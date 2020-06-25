<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Sign Up</title>
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
                                <input type="text" class="form-control" name="username" placeholder="username" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password" required>
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