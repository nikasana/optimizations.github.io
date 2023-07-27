var timerInterval;
var minutes = 25;
let maxMinutes = 25;
var seconds = 0;
var isPaused = true;
let projectSelected = false;
let projectSelectedName = "";

function startTimer() {
  if (isPaused) {
    isPaused = false;
    timerInterval = setInterval(updateTimer, 1000);
    let startButton = document.getElementById("startBtn");
    startButton.innerHTML = "Start";
  }
}

function pauseTimer() {
  clearInterval(timerInterval);
  isPaused = true;
  let startButton = document.getElementById("startBtn");
  if (maxMinutes != minutes) startButton.innerHTML = "Continue";

  // if (pauseButton.innerHTML == "Pause") {
  //   pauseButton.innerHTML = "Unpause";
  // } else {
  //   pauseButton.innerHTML = "Pause";
  // }
}

function resetTimer() {
  clearInterval(timerInterval);
  minutes = maxMinutes;
  seconds = 1;
  updateTimer();
  isPaused = true;

  let startButton = document.getElementById("startBtn");
  startButton.innerHTML = "Start";
}

function updateTimer() {
  var timerElement = document.getElementById("timer");
  var innerLine = document.getElementsByClassName("inner-line")[0];

  if (seconds === 0) {
    if (minutes === 0) {
      playSound();
      pauseTimer();
      let completedList = document.getElementsByClassName("completedList")[0];
      completedList.innerHTML += `<div class="completedLine">
      <div class="completedLineInner">
        <div class="completedText">Project worked on:</div>
        <div class="projectName">${projectSelectedName}</div>
        <div class="pomodoroNumber">(1 Pomodoro(s))</div>
      </div>
    </div>`;
      return;
    } else {
      minutes--;
      seconds = 59;
    }
  } else {
    seconds--;
  }

  timerElement.innerHTML = `<span id="minutes">${formatTime(
    minutes
  )}</span>:<span id="seconds">${formatTime(seconds)}</span>
      <button id="changeTimeBtn" onclick="openModal()">Change Time</button>`;
  innerLine.style.width = `${
    (100 * (minutes * 60 + seconds)) / (maxMinutes * 60)
  }%`;
}

function formatTime(time) {
  return time < 10 ? "0" + time : time;
}

function playSound() {
  var beepsound = new Audio("alarm.mp3");
        beepsound.play();

        setTimeout(function () {
          beepsound.pause();
          beepsound.currentTime = 0;
        }, 3000);
}

function openModal() {
  var modal = document.getElementById("modal");
  modal.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("modal");
  modal.style.display = "none";
}

function updateTimerTwo() {
  clearInterval(timerInterval);
  let newMinutes = document.getElementById("newMinutes");
  minutes = newMinutes.value;
  seconds = 1;
  maxMinutes = newMinutes.value;
  updateTimer();
  isPaused = true;
}

function selectProject() {
  var selectedProjectPrompt = prompt("Enter the project name:");
  if (selectedProjectPrompt !== null) {
    var selectedProjectElement = document.getElementById("selectedProject");
    selectedProjectElement.textContent = selectedProjectPrompt;
    selectedProject = true;
    projectSelectedName = selectedProjectPrompt;
  }
}
