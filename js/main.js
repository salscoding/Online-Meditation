function loginOut() {
  var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; 
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(300, 0 , 0, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); 
      window.location.href = "./login.html";
    }
  }, 60);

}
function startMeditating() {
    var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; 
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(300, 0 , 0, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); 
      window.location.href = `./meditation.html?params=` + "main";
    }
  }, 60); 

}
document.addEventListener("DOMContentLoaded", function () {
  var opacity = 0;
  var interval = setInterval(function () {
    opacity += 0.05; 
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(300, 0 , 0, " + opacity + ")";
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
    document.body.style.backgroundColor = "rgba(300, 0 , 0, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); 
      window.location.href = "./login.html";
    }
  }, 60); 
}
function changeImage() {
  var audio = document.getElementById("myAudio");
  var image = document.getElementById("myImage");
  if (image.src.match("../image/closeAudio.png")) {
    image.src = "./assets/image/openAudio.png";
    audio.play();
  } else {
    image.src = "./assets/image/closeAudio.png";
    audio.pause();
  }
}
