<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action='register' method="post">
        <div>
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="useremail" required>
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="userpassword" required>
            </div>
            <div>
                <label for="confirmpassword">ConfirmPassword: </label>
                <input type="password" name="confirmpassword" required>
            </div>
            <div>
                <input type="submit" value="submit" name="registersubmit">
            </div>
            <div><a href='login'>Login Here</a>
            </div>
                    </form>
    </body>
</html>