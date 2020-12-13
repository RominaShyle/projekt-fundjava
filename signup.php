<?php
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    header('location: index.php');
    exit;
  }

    require ('includes/db.php');


$fname_err= $lname_err = $email_err = $password_err = $error = '';

function validate($data){

  
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  return $data;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if (empty(validate($_POST['first_name']))) {
      $fname_err = "First name cannot be empty!";
  
    } 

    else {
      $fname = validate($_POST['first_name']);

    }

  
    if (empty(validate($_POST['last_name']))) {
        $lname_err = "Last name cannot be empty!";
    
      } 
    
  
      else {
        $lname = validate($_POST['last_name']);
    
      }
    
    
  
  
    if (empty(validate($_POST['email']))) {
      $email_err = "Please enter email!";
    } 
  
    else if(!filter_var(validate($_POST['email']), FILTER_VALIDATE_EMAIL)){
      $email_err = "Enter email in the correct format!";
    }
    else {
        //prepared statement
        $sql = "SELECT id FROM users where email = ?";

        if($stmt = $conn->prepare($sql)){
            $email_ = validate($_POST['email']);
            $stmt->bind_param("s", $email_ );
        
        if($stmt->execute()){
        
          $stmt->store_result();
        if($stmt->num_rows > 0){
        
          $email_err = "This email is taken.";
        }
        else {
          $email = validate($_POST['email']);
        }
        
        }else { die("Error!"); }
        
        
        }else { die("Error!");}
        
        $stmt->close();
        

    }
  
    
    if (empty($_POST['password'])) {
      $password_err = "Password cannot be empty!";
    } 
    if(strlen($_POST['password']) < 6){
      $password_err = "Password cannot be less than 6 characters!";
  
    }
    else {
      $password = $_POST['password'];
  
    }
    if($email_err == '' || $email_err == false && $fname_err == '' && $lname_err = '' && $password_err == ''){
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";

        if($stmt = $conn->prepare($sql)){
        
        
          $stmt->bind_param("ssss", $param_fname, $param_lname, $param_email, $param_password);
        
          $param_fname = $fname;
          $param_lname = $lname;
          $param_email = $email_;
          $param_password = password_hash($password, PASSWORD_DEFAULT);
        
          if ($stmt->execute()) {
            header('location: login.php');
          }else {
            echo "Could not create a new user!";
          }
        
          $stmt->close();
        
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
				
                <div class="col"><input type="text" class="form-control <?= !empty($fname_err) ? 'is-invalid' : ''; ?>" name="first_name" placeholder="First Name" required="required">
                <small id="error" class="form-text text-muted "><?= $fname_err; ?></small>
                </div>
                <div class="col"><input type="text" class="form-control <?= !empty($lname_err) ? 'is-invalid' : ''; ?>" name="last_name" placeholder="Last Name" required="required">
                <small id="error" class="form-text text-muted "><?= $lname_err; ?></small>
                </div>
            </div>        	
        </div>
        <div class="form-group">
        <input required type="email" class="form-control <?= !empty($email_err) ? 'is-invalid' : ''; ?>" id="email" placeholder="Enter Email" name="email">
            <small id="error" class="form-text text-muted "><?= $email_err; ?></small>
                 </div>
		<div class="form-group">
            <input type="password" class="form-control <?= !empty($password_err) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" required="required">
            <small id="error" class="form-text text-muted "><?= $password_err; ?></small>

        </div>
	      
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center" style="color: black;">Already have an account? <a href="login.php" style="color: black;">Sign in</a></div>
</div>
</body>
</html>