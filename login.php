

<!DOCTYPE html>
<html>
    <head>
    <title>
        Log In Sample
    </title>
</head>
    <link rel="stylesheet" href="login.css">
</html>

<body>
    <div id="login_form">
        <form method="post" action="login-db.php">
            <h1 class="">LOGIN</h1>
            <div class="form">
    <input type="text" placeholder="Username" name="username" required>
</div>

<div class="form">
    <input type="password" placeholder="Password" name="password" required>
</div>
    <center>
    <input type="checkbox">Agree to Terms and Condition
    </center>
            <input type="submit" class="black" value="LOGIN" name="submit"/>
            <button type="submit" class="black"><a href="signup.php">SIGN-UP</button>
</form>
</div>
</body>