// ! Modal - Registration

// ! Declaring Elements

const modalEl = document.querySelector(".section-modal");
const btnClose = document.querySelector(".close-modal");
const btnOpen = document.querySelector(".signup");
const overlay = document.querySelector(".overlay");
const regHeader = document.querySelector(".reg-header");
const logHeader = document.querySelector(".log-Header");
const formOne = document.querySelector(".form-one");
const formTwo = document.querySelector(".from-two");
const btnAccountExist = document.querySelector(".account-exist");

// ! open Modal

btnOpen.addEventListener("click", () => {
  modalEl.classList.remove("hidden");
  regHeader.classList.remove("hidden");
  logHeader.classList.add("hidden");
  formOne.classList.remove("hidden");
  formTwo.classList.add("hidden");
  btnAccountExist.textContent = "Already Have account?";
});

// ! Close Modal
const closeModal = () => {
  modalEl.classList.add("hidden");
};

btnClose.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  console.log(e.key);
  if (e.key === "Escape" && !modalEl.classList.contains("hidden")) {
    closeModal();
  }
});

//  ! log in Modal
btnAccountExist.addEventListener("click", function () {
  regHeader.classList.add("hidden");
  logHeader.classList.remove("hidden");
  formOne.classList.add("hidden");
  formTwo.classList.remove("hidden");
  btnAccountExist.textContent = "";
});
