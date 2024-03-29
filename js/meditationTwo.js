window.onload = function() {
  // 通过id选择弹窗，并调用Bootstrap的Modal方法显示它
  $('#confirmModal').modal('show');
};
document.addEventListener("DOMContentLoaded", function () {
  var opacity = 0;
  var interval = setInterval(function () {
    opacity += 0.03; // 每次增加0.1
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(500, 0, 0, " + opacity + ")";
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
    document.body.style.backgroundColor = "rgba(500, 0 , 0, " + opacity + ")"; // 使用 rgba() 设置背景颜色，并根据 opacity 改变透明度
    if (opacity <= 0) {
      clearInterval(interval); // 清除定时器
      window.location.href = "./login.html"; // 跳转到指定页面
    }
  }, 60); // 每50毫秒执行一次
}
function fadeAndRedirect1() {
  // 添加渐变效果
  var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; // 每次减小0.1
    document.body.style.opacity = opacity;
    if (opacity <= 0) {
      clearInterval(interval); // 清除定时器
      window.location.href = "file:///C:/Meditation-app-main/rain/rain.html"; // 跳转到指定页面
    }
  }, 60); // 每50毫秒执行一次
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

function returnHome() {
  var opacity = 1;
  var interval = setInterval(function () {
    opacity -= 0.05; // 每次减小0.1
    document.body.style.opacity = opacity;
    document.body.style.backgroundColor = "rgba(300, 0 , 0, " + opacity + ")";
    if (opacity <= 0) {
      clearInterval(interval); // 清除定时器
      localStorage.setItem("amountTime", parseInt(amountTime));
      window.location.href = "./meditation.html?params=" + "meditation";
    }
  }, 60); // 每50毫秒执行一次
}

// 操作时间
let timerID;
let amountTimer = parseInt(localStorage.getItem("amountTime"));
var timer = localStorage.getItem("timer");
var amountTime = amountTimer;
// if (timer && amountTimer) {
//   timerID = setInterval(timerS, 1000);
// }
const audio = document.querySelector("#myAudio");
const reset = document.querySelector("#reset");
// // 开始
// const buttonPlay = document.querySelector("#play");
// buttonPlay.addEventListener("click", function () {
//   if (!timer) {
//     let content = "Please set a meditation time";
//     modelMsg(content);
//     return false;
//   }
//   timerID = setInterval(timerS, 1000);
//   audio.play();
//   document.getElementById("count").classList.add("is-hied");
// });

// // 暂停
// const buttonStop = document.querySelector("#stop");
// buttonStop.addEventListener("click", function () {
//   stopTimer();
// });
// 开始/暂停
const buttonPlayStop = document.querySelector("#playStop");
const buttonPlayStopImg = document.querySelector("#playStopImg");
const buttonPlayStopText = document.querySelector("#playStopText");

// 添加点击事件处理程序
buttonPlayStop.addEventListener("click", function () {
  let isPlaying = buttonPlayStopText.textContent == "Pause";
  console.log(timer);
  if (!timer) {
    let content = "Please set a meditation time";
    modelMsg(content);
    return false;
  }
  console.log(isPlaying);
  // 切换播放状态和按钮图标
  if (!isPlaying) {
    timerID = setInterval(timerS, 1000);
    var images = document.getElementById("myImage");
    if (images.src.match("./assets/image/closeAudio.png")) {
      images.src = "./assets/image/openAudio.png";
    }
    audio.play();
    buttonPlayStopImg.src = "./assets/image/pause.png";
    buttonPlayStopText.textContent = "Pause";
    // document.getElementById("count").classList.add("is-hied");
    
  } else {
    stopTimer();
    console.log(111);
    buttonPlayStopImg.src = "./assets/image/start1.png";
    buttonPlayStopText.textContent = "continue";
  }
});

// 静音开/关
const Mute = document.getElementById("Mute");
var image = document.getElementById("myImage");
Mute.addEventListener("click", function () {
  if (image.src.match("./assets/image/closeAudio.png")) {
    image.src = "./assets/image/openAudio.png";
    if (buttonPlayStopText.textContent == "Pause") {
      audio.play();
    } else {
      return
    }
  } else {
    image.src = "./assets/image/closeAudio.png";
    if (buttonPlayStopText.textContent == "Pause") {
      audio.pause();
    } else {
      return
    }
  }
});
// 重置
reset.addEventListener("click", function () {
  const countdown = document.querySelector("#countdown");
  amountTime = timer * 60;
  let minutes = Math.floor(amountTime / 60);
  let seconds = amountTime % 60;
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  countdown.textContent = `${minutes} : ${seconds}`;
  setTimeout(() => {
    stopTimer();
  }, 500);
});

function timerS() {
  const countdown = document.querySelector("#countdown");
  let minutes = Math.floor(amountTime / 60);
  let seconds = amountTime % 60;

  if (seconds < 10) {
    seconds = "0" + seconds;
  }

  countdown.textContent = `${minutes} : ${seconds}`;
  amountTime--;

  if (amountTime < 0 && timerID) {
    // 仅在 amountTime 小于 0 且定时器处于活动状态时才调用 stopTimer()
    buttonPlayStopImg.src = "./assets/image/start1.png";
    buttonPlayStopText.textContent = "continue";
    amountTime = 0;
    let content = "It's time for your meditation";
    modelMsg(content);
    stopTimer();

    return false;
  }
}

function stopTimer() {
  clearInterval(timerID);
  audio.pause();
}

function setTime() {
  $("#successAlert").removeClass("d-none").alert();
  let tval = document.getElementById("timeValue").value;
  if (!tval) {
    $("#confirmModal").modal("hide");
    let content = "Please set a meditation times";
    modelMsg(content);
    return false;
  }
  timer = parseInt(document.getElementById("timeValue").value);
  localStorage.setItem("timer", parseInt(tval));
  const countdown = document.querySelector("#countdown");
  amountTime = timer * 60;
  let minutes = Math.floor(amountTime / 60);
  let seconds = amountTime % 60;
  if (seconds < 10) {
    seconds = "0" + seconds;
  }
  countdown.textContent = `${minutes} : ${seconds}`;
  stopTimer();
  let content = `Set the meditation time to  ${timer}min`;
  // modelMsg(content);
  $("#confirmModal").modal("hide");
  // 获取按钮元素
  let buttonPlayStop1 = document.getElementById("playStop");
  // 获取 center-box 元素
  let centerBox = document.querySelector(".center-box");
  
  // 首先设置透明度为 0，并应用渐变效果
  centerBox.style.opacity = "0";
  centerBox.style.transition = "opacity 1s ease";

  // 执行点击事件
  buttonPlayStop1.click();

  // 使用 setTimeout 来控制出现和消失的渐变效果
  setTimeout(() => {
    // 将透明度设置为 1，以显示元素
    centerBox.style.opacity = "1";
    
    // 再次使用 setTimeout 来控制消失的渐变效果
    setTimeout(() => {
      // 将透明度设置为 0，以隐藏元素
      centerBox.style.opacity = "0";
    }, 5000); // 在5秒后执行隐藏的渐变效果
  }, 0); // 在下一个事件循环中执行显示的渐变效果
}

function changeImage() {
  var audio = document.getElementById("myAudio");
  var image = document.getElementById("myImage");
  if (image.src.match("./assets/image/closeAudio.png")) {
    image.src = "./assets/image/openAudio.png";
    audio.play();
  } else {
    image.src = "./assets/image/closeAudio.png";
    audio.pause();
  }
}

// 四个点的悬浮开启音频
const audio1 = document.querySelector("#myAudio1");
const audio2 = document.querySelector("#myAudio2");
const audio3 = document.querySelector("#myAudio3");
const audio4 = document.querySelector("#myAudio4");
document.getElementById("btn01").addEventListener("mouseover", function () {
  audio1.play();
  audio2.pause();
  audio3.pause();
  audio4.pause();
});

document.getElementById("btn02").addEventListener("mouseover", function () {
  audio2.play();
  audio1.pause();
  audio3.pause();
  audio4.pause();
});
document.getElementById("btn03").addEventListener("mouseover", function () {
  audio3.play();
  audio2.pause();
  audio1.pause();
  audio4.pause();
});
document.getElementById("btn04").addEventListener("mouseover", function () {
  audio4.play();
  audio2.pause();
  audio1.pause();
  audio3.pause();
});

// 设置弹框内容
function modelMsg(content) {
  $("#alertMsg").modal("show");
  let text = document.getElementById("alertMsgVal");
  text.textContent = content;
}
