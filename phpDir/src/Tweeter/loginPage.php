<?php
include 'includes/sessions.php';
// session_start();  
if ($logged_in) {                              // If already logged in
    header('Location: loginPage.php');           // Redirect to account page
    exit;                                      // Stop further code running
}    

if($_SERVER['REQUEST_METHOD'] == 'POST') {     // If form submitted
    $user_email    =  $_POST['email'];         // Email user sent
    $user_password =  $_POST['password'];      // Password user sent

    if ($user_email == $email and $user_password == $password) { // If details correct
        login();                               // Call login function
        header('Location: home.php');       // Redirect to account page
        exit;                                  // Stop further code running
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginPage.css">
    <title>Tweeter</title>
</head>
<body>
    <div class="loginContainer">
        <div>Logo</div>
          <form method="POST" action="loginPage.php">
              <div>Sign in to Twitter</div>
              <a href="#" class="btn btn-signupAnother ">
                <img src="img/google.png" class="googleLogo"/>Sign up with Google
              </a>
              <a href="#" class="btn btn-signupAnother">
                <img src="img/apple.png" class="appleLogo"/>Sign up with Apple
              </a>

              <div class="or"><span>or</span></div>

              <br>

              <input type="email" name="email" placeholder="Email address" class="inputEmail"><br>
              <input type="password" name="password" placeholder="Insert password" class="inputPassword"><br>
              <input type="submit" value="Log In" class="btn btn-signupAnother">

              <a href="#" class="btn btn-signupAnother">
                Forgot Password
              </a>

          </form>



    </div>
    
</body>
</html>