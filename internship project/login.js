const bar = document.getElementById("bar");
const navbar = document.getElementById("nav-bar");
const cross = document.getElementById("crosses");

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