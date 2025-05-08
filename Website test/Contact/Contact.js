function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("open");
    var navT = document.querySelector(".navT");
    navT.classList.toggle("active");
  }

  
  function addClass() {
    document.body.classList.add("sent");
  }
  
  sendLetter.addEventListener("click", addClass);