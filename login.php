<?php

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    header('location: index.php');
    exit;
  }
    require ('includes/db.php');


    $email_err = $password_err = '';
    $email = $password = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    
    
      if(empty(trim($_POST['email']))){
    
          $email_err = "*E-mail can't be empty.";
    
          }
          else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $email_err = "*Please enter email in the correct format.";
                }
                else{
                        $email = trim($_POST['email']);
                }
    
    
    
    
          if(empty(trim($_POST['password']))){
              $password_err = 'Please enter a password.';
            }else { $password = trim($_POST['password']);}
    
    
            if(empty($email_err) || $email_err == false && empty($password_err)){
    
              $sql = 'SELECT id, email, password, role FROM users WHERE email = ?';
    
              if($stmt = $conn->prepare($sql)){
    
                $stmt->bind_param('s', $param_email);
    
              $param_email = $email;
    
                if($stmt->execute()){
    
                  $stmt->store_result();
    
                  if($stmt->num_rows == 1){
    $stmt->bind_result($id, $email, $hashed_password, $role);
    
    if($stmt->fetch()){
    
      if(password_verify($password, $hashed_password)){
    

    $_SESSION['logged_in'] = true;
    
    //$_SESSION['role'] = $role;

      header('location: index.php');
    
      }else
    
     $password_err = "Password is not correct!";
    }
    
                  }
                }
    
    
    
              }
    
            }
    
    
    
    
    
    
    }
?>



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
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		<h2>Log in</h2>
        
        <div class="form-group">
            
        <input type="email" class="form-control <?= !empty($email_err) ? 'is-invalid' : ''; ?>" name="email" placeholder="Email" required="required">
        <small id="error" class="form-text text-muted "><?= $email_err; ?></small>
    
    </div>
		<div class="form-group">
            <input type="password" class="form-control <?= !empty($password_err) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" required="required">
            <small id="error" class="form-text text-muted "><?= $password_err; ?></small>

        </div>
	      
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Log in</button>
        </div>
    </form>
	<div class="text-center" style="color: black;">Don't have an account? <a href="signup.php" style="color: black;">Sign up</a></div>
</div>


</body>
</html>