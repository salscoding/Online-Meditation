function loginOut() {
    localStorage.removeItem("rememberMe");

    var opacity = 1;
    var interval = setInterval(function () {
        opacity -= 0.05;
        document.body.style.opacity = opacity;
        document.body.style.backgroundColor =
            "rgba(300, 0 , 0, " + opacity + ")";
        if (opacity <= 0) {
            clearInterval(interval);
            window.location.href = "./signin";
        }
    }, 60);
}
function startMeditating() {
    var opacity = 1;
    var interval = setInterval(function () {
        opacity -= 0.05;
        document.body.style.opacity = opacity;
        document.body.style.backgroundColor =
            "rgba(300, 0 , 0, " + opacity + ")";
        if (opacity <= 0) {
            clearInterval(interval);
            window.location.href = "./home";
        }
    }, 60);
}
document.addEventListener("DOMContentLoaded", function () {
    var opacity = 0;
    var interval = setInterval(function () {
        opacity += 0.05;
        document.body.style.opacity = opacity;
        document.body.style.backgroundColor =
            "rgba(300, 0 , 0, " + opacity + ")";
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
        document.body.style.backgroundColor =
            "rgba(300, 0 , 0, " + opacity + ")";
        if (opacity <= 0) {
            clearInterval(interval);
            window.location.href = "./signin";
        }
    }, 60);
}
const audio = document.querySelector("#myAudio");
const Mute = document.getElementById("Mute");
var image = document.getElementById("myImage");
Mute.addEventListener("click", function () {
    if (image.src.match("frontend/assets/image/closeAudio.png")) {
        image.src = "frontend/assets/image/openAudio.png";
        audio.play();
    } else {
        image.src = "frontend/assets/image/closeAudio.png";
        audio.pause();
    }
});
