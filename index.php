<?php 
     session_start();

    
?>





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
        <h2 class="form-header">Login</h2>
     <label class="form-label">Username / Email</label><br>
        <input type="text" class="form-input" ><br>
        
       
        <label class="form-label">Password</label><br>
        <input type="password" class="form-input"><br>
       
        <br><br>
        
        <input type="submit" value="Login" class="form-button"> <br><br>
        <p>You don't have an account? <a href="registration.php">Create One!</a></p>
       
       


    </form>
</body>
</html>


<?php 
?>