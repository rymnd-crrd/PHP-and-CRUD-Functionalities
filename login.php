<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
  <h2>Login Page</h2>
  <button onclick="showLoginForm()">Login</button>
  <button onclick="showSignupForm()">Sign Up</button>
</div>

<!-- Login Form -->
<div id="loginForm" class="form-popup">
  <form class="form-container">
    <h3>Login</h3>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
  </form>
</div>

<!-- Sign Up Form -->
<div id="signupForm" class="form-popup">
  <form class="form-container">
    <h3>Sign Up</h3>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="contact"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Contact No." name="contact" required>

    <button type="submit" class="btn">Sign Up</button>
    <button type="button" class="btn cancel" onclick="closeSignupForm()">Close</button>
  </form>
</div>

<script src="script.js"></script>
</body>
</html>
