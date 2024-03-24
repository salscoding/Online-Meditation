document.addEventListener("DOMContentLoaded", function () {
  var opacity = 0;
  var interval = setInterval(function () {
    opacity += 0.05; 
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(0, 0 , 128, " + opacity + ")";
    if (opacity >= 1) {
      clearInterval(interval); 
    }
  }, 60); 
});

function fadeAndRedirect() {
  var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; 
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(0, 0 , 128, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); 
      var rememberMe = localStorage.getItem("rememberMe");
      if (rememberMe === "true") {
        window.location.href = "./main.html"; 
      } else {
        window.location.href = "./login.html";
      }
    }
  }, 60); 
}
