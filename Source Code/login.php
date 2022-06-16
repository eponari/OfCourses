<html>
    <head>
        <title>Login</title>
            <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
            <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
    </head>
    <body>
        <div class="loginbox"> 
            <img src="images/avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form action="Controller/login.php" method="POST">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" name="submit" value="Login">
                <!-- <a href="#">Lost your password?</a><br> -->
                <a href="signup.php">Don't have an account?</a>
            </form>
        </div>     
    </body>
</html>