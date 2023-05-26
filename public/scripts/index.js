const modal = document.getElementById("menu");
const modalOpen = document.getElementById("modalOpen");
const modalClose = document.getElementById("modalClose");
const btnOpen = document.getElementById("menuOpen");
const btnClose = document.getElementById("menuClose");

btnOpen.onclick = function() {
  modal.style.height = "90px";
  modalOpen.style.display = "none";
  btnClose.style.display = "block";
  btnOpen.style.display = "none";
}

btnClose.onclick = function() {
  modal.style.height = "calc(95% - 200px)";
  modalOpen.style.display = "block";
  btnClose.style.display = "none";
  btnOpen.style.display = "block";
}

