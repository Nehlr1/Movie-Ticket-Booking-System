<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login and Registration Page</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="test.js"></script>
</head>
<body>
  <div class="container-2">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log in</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>
      <div class="social-icons">
      <img src="images/logos/fb.png">
      <img src="images/logos/tw.png">
      <img src="images/logos/gp.png">
      </div>
    
    <form id="login" class="input-group" action="loginSession.php" method="post">
      <input type="text" class="input-field" name="userID" placeholder="User Id" required>
      <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
      <input type="checkbox" class="check-box"><span>Remember Password</span>
      <button type="submit" class="submit-btn">Log in</button>
    </form>

    <form id="register" class="input-group" name="myForm" action="registration.php" method="post">
      <input type="text" class="input-field" name="userID" placeholder="User Id" minlength="5" maxlength="8" required>
      <input type="email" class="input-field" name="email" placeholder="Email Id" required>
      <input type="password" class="input-field" name="password" placeholder="Enter Password" minlength="8" maxlength="12" required>
      <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
      <button type="submit" class="submit-btn">Register</button>
    </form>

    </div>
  </div>

  <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register()
    {
      x.style.left = "-400px";
      y.style.left = "50px";
      z.style.left = "110px";
    }

    function login()
    {
      x.style.left = "50px";
      y.style.left = "450px";
      z.style.left = "0px";
    }
  </script>
</body>
</html>