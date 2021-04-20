"use strict";
function LoadPDF(url) {
  const width = window.screen.width*0.9;
  const height = window.screen.height;
  const iFrame = document.querySelector(".pdfDiv");
  iFrame.innerHTML =
    '<center><iframe class="pdfFrame" src="http://canaofgalilee.oo.gd/stbarnabas/docs/' +
    url +
    '" width="' +
    width +
    '" height="' +
    height +
    '" style="border: none"></iframe></center>';
    document.querySelector("#cardContainer").classList.add("hidden");
    
}

const modal = document.querySelector(".modall");
const btnCloseModal = document.querySelector(".close-modal");
const btnsOpenModal = document.querySelectorAll(".show-modal");

const openModal = function () {
  modal.classList.remove("hidden");
  // overlay.classList.remove("hidden");
  document.querySelector("#cardContainer").classList.add("hidden");
};

const closeModal = function () {
  modal.classList.add("hidden");
  // overlay.classList.add("hidden");
  document.querySelector("#cardContainer").classList.remove("hidden");
};

// for (let i = 0; i < btnsOpenModal.length; i++)
// btnsOpenModal[i].addEventListener("click", openModal);

// btnCloseModal.addEventListener("click", closeModal);
// modal.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  // console.log(e.key);

  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});
