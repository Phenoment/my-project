
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>signup page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://kit.fontawesome.com/7162991d62.js" crossorigin="anonymous"></script>
    <link rel='stylesheet'  href="style.css">
</head>
<body>
    <section id="sect1">
        <a href="#"><img src="EJ.png"  class="logo"></a>
        <div>
            <ul id="nav-bar">
                <a href="#" id="cross"><i class="fa-solid fa-xmark"></i></a>
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="loginpage.php" class="nav-link">Login</a></li>
                <li><a href="#" class="nav-link">Aboutus</a></li>
                <li><a href="#" class="nav-link">Contactus</a></li>
                <li><a href="#" class="nav-link">Donate</a></li>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section><br>
    <form action="easyreg.php" method="post">
        
        <div class="submit">
            <h2> Welcome to Easyjob</h2>
       <label>first name</label>
        <input type="text" name="fname" placeholder="first name" id="validate_fname" onkeyup="validateFname()"><br>
        <span id="first-error"></span>
       <label>last name</label>
        <input type="text" name="lname" placeholder="last name" id="validate_lname" onkeyup="validateLname()"><br>
        <span id="last-error"></span>
        <label>email</label>
        <input type="email" name="email" placeholder="email" id="validate_email" onkeyup="validateEmail()"><br>
        <span id="email-error"></span>
        <label>Password</label>
        <input type="password" name="password" placeholder="password" id="validate_Password" onkeyup="validatePassword()"><br>
        <span id="password-error"></span>
        <label>confirm password</label>
        <input type="password" name="cnfrmpassword" placeholder="password" id="validate_cnfrm" onkeyup="validateCnfrm()"><br>
        <span id="cnfrm-error"></span>
        <button type="sign up" onclick="return validateForm()">sign up</button><br>
        <span id="signup-error"></span>
        <p>  have an account? <a href="loginpage.php">login here</a></p>
        </div>
        
    </form>
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
    <script src="signup.js"></script>
</body>
</html>