document.addEventListener("DOMContentLoaded", function () {
  var opacity = 0;
  var interval = setInterval(function () {
    opacity += 0.05; // 0.05 per increase
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(0, 0 , 128, " + opacity + ")";
    if (opacity >= 1) {
      clearInterval(interval); // Clear Timer
    }
  }, 60); // Executed every 60 milliseconds
});

function fadeAndRedirect() {
  var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; // 0.05 per decrease
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(0, 0 , 128, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); // Clear Timer
      window.location.href = "../login/login.html";
    }
  }, 60); // Executed every 60 milliseconds
}
