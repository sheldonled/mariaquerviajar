
const toggle = (buttonSelector, menuSelector) => {
  const button = document.querySelector(buttonSelector);
  if(!button) return;
  const menu = document.querySelector(menuSelector);
  if(!menu) return;
  button.classList.toggle("icon__navicon");
  button.classList.toggle("icon__times");
  
  menu.classList.toggle("menu__open");
  document.body.classList.toggle("frozen");
};

const release = (buttonSelector, menuSelector) => {
  if(!window.matchMedia("(min-width: 40.063rem)").matches) return;
  const button = document.querySelector(buttonSelector);
  if(!button) return;
  const menu = document.querySelector(menuSelector);
  if(!menu) return;

  button.classList.add("icon__navicon");
  button.classList.remove("icon__times");
  menu.classList.remove("menu__open");
  document.body.classList.remove("frozen");
};

const bind = function(buttonSelector, menuSelector) {
  const button = document.querySelector(buttonSelector);
  if(!button) return;
  button.addEventListener("click",this.toggle.bind(this, buttonSelector, menuSelector));
  window.addEventListener("resize",this.release.bind(this, buttonSelector, menuSelector));
};

export default {toggle, release, bind};