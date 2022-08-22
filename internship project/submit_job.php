<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit form</title>
    <link rel="stylesheet" href="submit_job.css">
</head>
<body>
<section id="sect1">

              <a href="#"><img src="EJ.png"  class="logo"></a>
        <div>
            <ul id="nav-bar">
                <a href="#" id="cross"><i class="fa-solid fa-xmark"></i></a>
                <li><a href="#" class="nav-link">Jobs
               <select name="" id="">
               <option value=""><a href="#">posted</a></option>
                    <option value=""><a href="#">completed</a></option>
               </select>
                </a></li>
                <li><a href="employee.php" class="nav-link">switch to employee</a></li>
                <li><a href="#" class="nav-link">my accont</a></li>
                <li><a href="#" class="nav-link">support ticket</a></li>
                <li><a href="#" class="nav-link">Logout</a></li>
            </ul>
        </div>
        <div id="mobile">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
</section>
    <div class="sub_job">
        <div class="topic">
            <h1>Fill and submit</h1>
        </div>
        <form action="submit.php" method="post">
            <div class="input_field">
                <label>Job Title</label>
                <input type="text" class="input" name="title" id="validate_title" onkeyup="validateTitle()">
                <span id="title_error"></span>
            </div>
            <div class="input_field">
                <label>Job Location</label>
                <input type="text" class="input" name="location" id="validate_location" onkeyup="validateLocation()">
                <span id="location_error"></span>
            </div>
            <div class="input_field">
                <label>Job Status</label>
                <input type="text" class="input" name="status" id="validate_status" onkeyup="validateStatus()">
                <span id="status_error"></span>
            </div>
            <div class="input_field">
                <label>Contact</label>
                <input type="text" class="input" placeholder="email or phone number" name="contact" id="validate_contact" onkeyup="validateContact()">
                <span id="contact_error"></span>
            </div>
            <div class="input_field">
                <label>Job Description</label>
                <textarea  id="" cols="30" rows="10" name="description" id="validate_description" onkeyup="validateDescription()"></textarea>
                <span id="descripe_error" class="area"></span>
            </div>
            <div class="input_field">
                <input type="submit" value="Submit job" class="btn">
                <span id="submit_error"></span>
            </div>
        </form>
    </div>
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
</body>
</html>