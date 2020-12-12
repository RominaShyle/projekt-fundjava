<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'jemi ok';
    var_dump($_POST);
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require 'includes/links.php';?>
    <link rel="stylesheet" href="styles/signup.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

</head>
<body>
<?php require 'includes/navbar.php'; ?>
<div class="signup-form">
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
	      
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center" style="color: black;">Already have an account? <a href="login.php" style="color: black;">Sign in</a></div>
</div>
</body>
</html>