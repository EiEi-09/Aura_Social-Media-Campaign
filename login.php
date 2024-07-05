<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
  <nav>
      <ul>
        <li class="link"><a href="index.php">Home</a></li>
        <li class="link"><a href="binformation.php">Information</a></li>
        <li class="link"><a href="blegislation.php">Legislation</a></li>
        <li class="link"><a href="login.php">Login</a></li>
      </ul>
     
    </nav>
    <header>
      <h1>SIGN IN</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact">
        
        <h1>WELCOME BACK !</h1>
        <br>
        <!-- Contact Form -->
        <form action="login-success.php" method="POST">
         
          <!-- <label for="email">Email:</label> -->
          <input type="email" id="email" name="email" placeholder="Enter Email" required />
          <br>
          <!-- <label for="message">Password:</label> -->
          <input type="password" id="email" name="password" placeholder="Enter Password" required />
          <br>
          <button type="submit">Sign In</button>
        </form>
        <br><br>
         Don't have account ?  Register <a href="registration.php"> Here</a>
        
        <!-- Privacy Policy Link -->
        <br><br>
        <p>
          Before sending a message, please review our
          <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
        </p>
      </section>
    </main>

    <footer>
      <p>You are here: Login</p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <!-- Add social media buttons with relevant links -->
        <a href="#" style="color: white">Facebook</a>
        <a href="#" style="color: white; margin-left: 10px">Twitter</a>
        <a href="#" style="color: white; margin-left: 10px">Instagram</a>
      </div>
    </footer>
  </body>
</html>
