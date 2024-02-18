<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="registration-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2 class="registration-header">Register</h2>
        <label class="registration-label">Name</label><br>
        <input type="text" class="registration-input" ><br>
        <label class="registration-label">Surname</label><br>
        <input type="text" class="registration-input" ><br>
        <label class="registration-label">Age</label><br>
        <input type="text" class="registration-input" ><br>
        <label class="registration-label">Password</label><br>
        <input type="password" class="registration-input"><br>
        <label class="registration-label">Confirm Password</label><br>
        <input type="password" class="registration-input" >
        <br><br>
        <a href="login.php">Already have an account?</a>
        <input type="submit" value="Register" class="registration-button">


    </form>
</body>
</html>