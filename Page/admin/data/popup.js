function tambahForm() {
  var tambahPopupForm = document.getElementById("tambahPopupForm");
  tambahPopupForm.classList.add("show");
  tambahPopupForm.classList.remove("hide");
}

var tambahPopupForm = document.getElementById("tambahPopupForm");
tambahPopupForm.addEventListener("click", function (event) {
  if (event.target === this) {
    tambahPopupForm.classList.add("hide");
    setTimeout(function () {
      tambahPopupForm.classList.remove("show");
    }, 500);
  }
});

function updateForm(userId) {
  var updatePopupForm = document.getElementById("updatePopupForm");
  updatePopupForm.classList.add("show");
  updatePopupForm.classList.remove("hide");
}

var updatePopupForm = document.getElementById("updatePopupForm");
updatePopupForm.addEventListener("click", function (event) {
  if (event.target === this) {
    updatePopupForm.classList.add("hide");
    setTimeout(function () {
      updatePopupForm.classList.remove("show");
    }, 500);
  }
});
