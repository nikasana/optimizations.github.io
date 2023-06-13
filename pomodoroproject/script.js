var timerInterval;
var minutes = 25;
var seconds = 0;
var isPaused = true;

function startTimer() {
  if (isPaused) {
    isPaused = false;
    timerInterval = setInterval(updateTimer, 1000);
  }
}

function pauseTimer() {
  clearInterval(timerInterval);
  isPaused = true;
  let pauseButton = document.getElementById("pauseBtn");
  // if (pauseButton.innerHTML == "Pause") {
  //   pauseButton.innerHTML = "Unpause";
  // } else {
  //   pauseButton.innerHTML = "Pause";
  // }
}

function resetTimer() {
  clearInterval(timerInterval);
  minutes = 25;
  seconds = 1;
  updateTimer();
  isPaused = true;
  let pauseButton = document.getElementById("pauseBtn");
  pauseButton.innerHTML = "Pause";
}

function updateTimer() {
  var timerElement = document.getElementById("timer");
  var innerLine = document.getElementsByClassName("inner-line")[0];

  if (seconds === 0) {
    if (minutes === 0) {
      playSound();
      pauseTimer();
      return;
    } else {
      minutes--;
      seconds = 59;
    }
  } else {
    seconds--;
  }

  timerElement.innerHTML = formatTime(minutes) + ":" + formatTime(seconds);
  innerLine.style.width = `${(100 * (minutes * 60 + seconds)) / (25 * 60)}%`;
}

function formatTime(time) {
  return time < 10 ? "0" + time : time;
}

function playSound() {
  // Add code to play a sound when the timer is up
  // For example:
  // var audio = new Audio("path/to/sound/file.mp3");
  // audio.play();
}
