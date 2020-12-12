<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require 'includes/links.php';?>
    <link rel="stylesheet" href="styles/signup.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php require 'includes/navbar.php'; ?>
<div class="signup-form">
    <form action="#" method="">
		<h2>Log in</h2>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
	      
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Log in</button>
        </div>
    </form>
	<div class="text-center" style="color: black;">Don't have an account? <a href="signup.php" style="color: black;">Sign up</a></div>
</div>


</body>
</html>