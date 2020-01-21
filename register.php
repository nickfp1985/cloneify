<?php
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account();

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
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

    <!-- 
      USER LOGIN FORM 
    -->
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

    <!-- 
      NEW ACCOUNT REGISTRATION FORM 
    -->
    <form id="registerForm" action="register.php" method="POST">
    <h2>Sign up with your email address</h2>
    <p>
      <?php echo $account->getError(Constants::$unLength); ?>
      <input id="username" name="username" type="text" placeholder="What should we call you?" value="<?php getInputValue('username') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Contants::fnLength); ?>
      <input id="firstName" name="firstName" type="text" placeholder="First Name" value="<?php getInputValue('firstName') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$lnLength); ?>
      <input id="lastName" name="lastName" type="text" placeholder="Last Name" value="<?php getInputValue('lastName') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$emailDoNotMatch); ?>
      <?php echo $account->getError(Constants::$emailInvalid); ?>
      <input id="email" name="email" type="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
    </p>
    <p>
      <input id="email2" name="email2" type="email" placeholder="Confirm Email" value="<?php getInputValue('email2') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$pwDoNotMatch); ?>
      <?php echo $account->getError(Constants::$pwNotAlphanumeric); ?>
      <?php echo $account->getError(Constants::$pwLength); ?>
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