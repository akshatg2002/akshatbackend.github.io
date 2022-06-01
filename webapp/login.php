<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Bootstrap simple Login Form with Blue Background</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="signup-form">
    <form action="loginhelp.php" method="post">
        <h2>Login</h2>
        <p>Please enter Credentials!</p>
        <hr>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password" required="required">
        </div>
        <div class="form-group">
            <button type="sumbit" class="btn btn-primary btn-lg">Login</button>
        </div>
    </form>
    <div class="hint-text">New User? <a href="index.php">Signup here</a></div>
</div>
</body>
</html>