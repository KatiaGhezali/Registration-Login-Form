<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="user-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2 class="form-header">Register</h2>
     <label class="form-label">Name</label><br>
        <input type="text" class="form-input" placeholder="Enter your name"><br>
        <label class="form-label">Surname</label><br>
        <input type="text" class="form-input" ><br>
        <label class="form-label">Age</label><br>
        <input type="text" class="form-input" ><br>
        <label class="form-label">Password</label><br>
        <input type="password" class="form-input"><br>
        <label class="form-label">Confirm Password</label><br>
        <input type="password" class="form-input" >
        <br><br>
        
        <input type="submit" value="Register" class="form-button"> <br><br>
        <p>Already have an account? <a href="login.php">Log in</a></p>
       


    </form>
</body>
</html>