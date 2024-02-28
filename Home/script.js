document.addEventListener("DOMContentLoaded", function () {
  var opacity = 0;
  var interval = setInterval(function () {
    opacity += 0.05; // 每次增加0.1
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(0, 0 , 128, " + opacity + ")";
    if (opacity >= 1) {
      clearInterval(interval); // 清除定时器
    }
  }, 60); // 每50毫秒执行一次
});
function fadeAndRedirect() {
  var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; // 每次减小0.1
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(0, 0 , 128, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); // 清除定时器
      window.location.href = "../login/login.html";
    }
  }, 60); // 每50毫秒执行一次
}
