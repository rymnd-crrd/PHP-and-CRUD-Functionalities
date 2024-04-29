<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    
    

</head>
<body>
    <div class="logo">
    <img src="Coffee_Shop_logo-removebg-preview.png" alt="logo">
    </div>

    <header class="header">
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="price.html">Menu</a></li>
            <li><a href="contact.html">Contact</a></li>
            
        </ul>
       
    </nav>
</header>

    <div class="button-position">
        <a href="about.html">
        <button class="square-button">About Us</button>
    </a>

        <a href="price.html">
        <button class="square-button">Our Menu</button>
    </a>
    </div>
    
    <h1> <span class="hahaha">Start your day </span> <br> with my teapots coffee</h1>
    <h3>DELICIOUS REFRESHING <span class="dot">.</span> TEAPOTS WITH LOVE</h3>
    <p>Tikman niyo na to pag ka higop mo lasang masarap <br> sobrang sarap mo talaga teapots</p>
 
    <div class="container">
        <h2></h2>
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
