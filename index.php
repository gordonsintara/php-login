<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>Sign up</h4>
            <p>Already have an account? Login here</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="username">
                <input type="password" name="pwd" placeholder="Passsword">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="Email"><br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>

        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p>Dont have an account yet? Sign up here</p>

            <form action="include/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">LOGIN</button>    
            </form>
        </div>

    </div>

    


</section>
    
</body>
</html>