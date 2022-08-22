var title = document.getElementById("title_error");
var location = document.getElementById("location_error");
var status = document.getElementById("status_error");
var contact = document.getElementById("contact_error");
var description = document.getElementById("descripe_error");
var submit = document.getElementById("submit_error");
 
//passing commands validate_status validate_contact validate_description validate_title
function validateTitle(){
   var jobtitle = document.getElementById("validate_title").value;
   if(jobtitle.length == 0){
    title.innerHTML = "Field reuired";
    return false;
   }
   if(!jobtitle.match(/^[A-Za-z]+$/))
    {
        title.innerHTML = "Name cant contain spaces";
        return false;
    }
    }
