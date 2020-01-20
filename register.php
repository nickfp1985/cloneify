<?php

if(isset($_POST)['loginButton']) {
  // when login button is pressed
}

if(isset($_POST)['registerButton']) {
  // when register button is pressed
  $username = $_POST['username'];
  $username = strip_tags($username);
  $username = str_replace(" ", "", $username);

  $firstName = $_POST['firstName'];
  $firstName = strip_tags($firstName);
  $firstName = str_replace(" ", "", $firstName);
  $firstName = ucfirst(strtolower($firstName));
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
      <input id="username" name="username" type="text" placeholder="What should we call you?" required>
    </p>
    <p>
      <input id="firstName" name="firstName" type="text" placeholder="First Name" required>
    </p>
    <p>
      <input id="lastName" name="lastName" type="text" placeholder="Last Name" required>
    </p>
    <p>
      <input id="email" name="email" type="email" placeholder="Email" required>
    </p>
    <p>
      <input id="email2" name="email2" type="email" placeholder="Confirm Email" required>
    </p>
    <p>
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