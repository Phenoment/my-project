<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LOGIN FORM</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://kit.fontawesome.com/7162991d62.js" crossorigin="anonymous"></script>
    <link rel='stylesheet'  href="1STYLE.CSS">
    
</head>
<body>
  <section id="sect1">
    <a href="#"><img src="EJ.png"  class="logo"></a>
    <div>
        <ul id="nav-bar">
        <a href="#" id="crosses"><i class="fa-solid fa-xmark"></i></a>
            <li><a href="homepage.html" class="nav-link">Home</a></li>
            <li><a href="signuppage.php" class="nav-link">Signup</a></li>
            <li><a href="#" class="nav-link">Aboutus</a></li>
            <li><a href="#" class="nav-link">Contactus</a></li>
            <li><a href="#" class="nav-link">Donate</a></li>
        </ul>
    </div>
    <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
</section><br>
<section id="login">
  <form action="validation.php" method="post">
        <h2>login to your Easyjob account</h2><br>
        <p>email</p>
        <input type="text" name="email" placeholder="email"required>
        <p>Password</p>
        <input type="password" name="password" placeholder="password"required><br>
       <p><a href="#"> forgot password</a></p>
        <div class="fix">
        <button type="submit">login</button><br>
        <label for="">dont have and account? <a href="signuppage.php">signup here</a></label>
        </div>
      </form>
</section>
    <footer class="section-p1">
      <div class="footcont">
          <img src="EJ.png" alt="" class="logo">
          <a href="#">Affilate program</a>
          <a href="#">Frelance and earn</a>
          <a href="#"> Privacy Policy </a>
          <a href="#">  Terms of use  </a>
          <a href="#">   AboutUs</a>
      </div><br>
      <div class="social">
          <a href="#">Contactus</a>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-github"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
      </div>
      <div class="copyright">
          @copyright easyjob022
      </div>
  </footer>
  <script src="login.js"></script>
</body>
</html>