let ratings = document.querySelectorAll(".rating");
let selected = -1;
let results = document.querySelector(".result-num");
let submit = document.querySelector(".submit");
let feedback = document.querySelector(".feedback");
let feedbackResult = document.querySelector(".feedback-result");

ratings.forEach(function (rating, index) {
  rating.addEventListener("click", function () {
    selected = index + 1;
    results.innerHTML = selected;
    ratings.forEach(function (rating) {
      rating.classList.remove("orange");
    });
    rating.classList.add("orange");
  });
});

submit.addEventListener("click", function () {
  if (selected !== -1) {
    feedback.classList.add("hide");
    feedbackResult.classList.remove("hide");
  }
});
