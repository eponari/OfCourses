<html>
    <head>
        <title>Signup</title>
            <link rel="stylesheet" type="text/css" href="css/signupStyle.css">
            <link rel="icon" href="https://github.com/eponari/OfCourses/blob/main/projectLogo.jpg?raw=true">
    </head>
    <body>
        <div class="loginbox"> 
            <img src="images/avatar.png" class="avatar">
            <h1>Signup Here</h1>
            <form action="Controller/signup.php" method="POST">
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter Name" required>
                
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email" required>
                
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password" required>
                
                <p>Type of account</p>
                </br>
                <select name="type" id="type" required>
                    <option value="1"><p>Student</p></option>
                    <option value="2"><p>Professor</p></option>
                </select>
                    
                </br></br>

                <input type="submit" name="submit" value="Signup">
                
                <a href="login.php">Already have an account?</a>
            </form>

        </div>
        
    </body>
</html>