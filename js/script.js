// window.onscroll = function() {myFunction()};

// var navbar = document.getElementById("navbar");

// // var sticky = navbar.offsetTop;


// function myFunction() {
//     let position =window.getComputedStyle(navbar).top;
//     console.log(position)
//   if (position==="0") {
//     // navbar.classList.add("sticky")
//     navbar.style.position="sticky"
//   } else {
//     // navbar.classList.remove("sticky");
//     navbar.style.position="fixed"
//     navbar.style.width="100%"
    
    
//   }
// }

// for redirect
let sign_in =document.getElementById("btn-sign_in")

sign_in.onclick=()=>{
  window.location.href ="pages/login/login.php"
}
let log_out =document.getElementById('btn-log_out');
console.log("aas")
log_out.onclick=()=>{
  window.location.href="/backend/logout.php";
}
// cart- page
document.querySelectorAll