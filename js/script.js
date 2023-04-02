window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

// var sticky = navbar.offsetTop;


function myFunction() {
    let position =window.getComputedStyle(navbar).top;
    console.log(position)
  if (position==="0") {
    // navbar.classList.add("sticky")
    navbar.style.position="sticky"
  } else {
    // navbar.classList.remove("sticky");
    navbar.style.position="fixed"
    navbar.style.width="100%"
    
    
  }
}