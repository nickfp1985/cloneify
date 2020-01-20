<?php
  include("includes/classes/Account.php");

  $account = new Account();

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cloneify - Music For Everyone</title>
</head>
<body>
  <div id="inputContainer">
  
    <form id="loginForm" action="register.php" method="POST">
    <h2>Log in to Cloneify</h2>
    <p>
      <input id="loginUsername" name="loginUsername" type="text" placeholder="Email or username" required>
    </p>
    <p>
      <input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required>
    </p>
    <button type="submit" name="loginButton">Log In</button>
    </form>

    <form id="registerForm" action="register.php" method="POST">
    <h2>Sign up with your email address</h2>
    <p>
      <?php echo $account->getError("Your username must be between 5-25 characters"); ?>
      <input id="username" name="username" type="text" placeholder="What should we call you?" required>
    </p>
    <p>
      <?php echo $account->getError("Your first name must be between 2-25 characters"); ?>
      <input id="firstName" name="firstName" type="text" placeholder="First Name" required>
    </p>
    <p>
      <?php echo $account->getError("Your last name must be between 2-25 characters"); ?>
      <input id="lastName" name="lastName" type="text" placeholder="Last Name" required>
    </p>
    <p>
      <?php echo $account->getError("The emails do not match."); ?>
      <?php echo $account->getError("Email is invalid."); ?>
      <input id="email" name="email" type="email" placeholder="Email" required>
    </p>
    <p>
      <input id="email2" name="email2" type="email" placeholder="Confirm Email" required>
    </p>
    <p>
      <?php echo $account->getError("The passwords do not match."); ?>
      <?php echo $account->getError("The password can only contain numbers and letters."); ?>
      <?php echo $account->getError("Your password must be between 5-30 characters."); ?>
      <input id="password" name="password" type="password" placeholder="Password" required>
    </p>
    <p>
      <input id="password2" name="password2" type="password" placeholder="Confirm Password" required>
    </p>
    <button type="submit" name="registerButton">Sign Up</button>
    </form>

  </div>
</body>
</html>