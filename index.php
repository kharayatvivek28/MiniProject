<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login Page</title>
   <link rel="stylesheet" href="CSS/Login_page.css">
   <link rel="icon" type="image/x-icon" href="Image/logo_icon.jpeg">

  </head>
  <body>
    <div class="background">
      <div class="tree"></div>
      <div class="moon"></div>
      <div class="mountain"></div>
    </div>
    <div class="login-container">
      <h2>ADMIN LOGIN</h2>
      <form action="login.php" method="POST">
        <div class="input-group">
          <input type="text" name="username" placeholder="Username" required />
        </div>
        <div class="input-group">
          <input
            type="password"
            name="password"
            placeholder="Password"
            required
          />
        </div>

        <button type="submit" value="Login" class="login-btn">LOGIN</button>
      </form>
      <div class="register-link">
        Don't have an account? <a href="register_form.html">REGISTER NOW</a>
      </div>
    </div>
  </body>
</html>
