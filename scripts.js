function login(){
      var x = document.getElementById("acc");
      var login = document.getElementById("nav-login-button");
      x.style.display = "block";
      login.style.display = "none";
}

window.onscroll = function() {setSticky()};

    var navbar = document.getElementById("nav");
    var sticky = navbar.offsetTop;

    function setSticky() {
      if (window.pageYOffset >= sticky+1) {
          navbar.classList.add("sticky")
      } else {
          navbar.classList.remove("sticky");
      }
    }
