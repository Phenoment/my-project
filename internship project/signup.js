const bar = document.getElementById("bar");
const navbar = document.getElementById("nav-bar");
const cross = document.getElementById("cross");

if(bar){
    bar.addEventListener("click", () =>{
     navbar.classList.add("active");
    })
}
if(cross){
    cross.addEventListener("click", () =>{
        navbar.classList.remove("active");
    })
}

//validating the form 
var firstName = document.getElementById("first-error");
var lastName = document.getElementById("last-error");
var emailId = document.getElementById("email-error");
var Password = document.getElementById("password-error");
var cnfrmPassword = document.getElementById("cnfrm-error");
var Validate = document.getElementById("signup-error");

//passing the commands
function validateFname(){
var fname = document.getElementById("validate_fname").value;
if(fname.length == 0){
    firstName.innerHTML = "Name is required";
    return false;
}
if(!fname.match(/^[A-Za-z]+$/))
{
    firstName.innerHTML = "Name cant contain spaces";
    return false;
}
firstName.innerHTML = '<i class="fa-solid fa-circle-check"></i>'
return true;
}
//lastname
function validateLname(){
    var lname = document.getElementById("validate_lname").value;
    if(lname.length == 0){
        lastName.innerHTML = "Name is required";
        return false;
    }
    if(!lname.match(/^[A-Za-z]+$/))
    {
        lastName.innerHTML = "Name cant contain spaces";
        return false;
    }
    lastName.innerHTML = '<i class="fa-solid fa-circle-check"></i>'
    return true;
    }
    //email
    function validateEmail(){
var email = document.getElementById("validate_email").value;
if(email.length == 0){
    emailId.innerHTML = "Email is required";
    return false;
}
if(!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
    emailId.innerHTML = "Invalid Email format"
    return false;
  }
  emailId.innerHTML ='<i class="fa-solid fa-circle-check"></i>'
  return true;

    }
    //password
    function validatePassword(){
        var pass = document.getElementById("validate_Password").value;
        if(pass.length == 0){
        Password.innerHTML = "password is required";
        return false;
        }
        Password.innerHTML ='<i class="fa-solid fa-circle-check"></i>'
            return true;

    }

    //cnfrmpass
    function validateCnfrm(){
        var cnfrm = document.getElementById("validate_cnfrm").value;
        if(cnfrm.length == 0){
            cnfrmPassword.innerHTML = "password is required";
            return false;
            }
            cnfrmPassword.innerHTML ='<i class="fa-solid fa-circle-check"></i>'
                return true;
    }
    //signing up
    function validateForm(){
        if(!validateFname() || !validateLname() || !validateEmail() || !validatePassword() || !validateCnfrm){
            Validate.style.display == "block";
            Validate.innerHTML = "fix all errors";
            setTimeout(function(){ Validate.style.display == "none"; 9000});
        }
    }
