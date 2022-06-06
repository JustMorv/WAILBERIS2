const header =  document.querySelector(".header"),
      headerFixed = document.querySelector(".headerFixed"),
      headerLogo = document.querySelector(".header__logo_conteiner");



window.addEventListener("scroll",headerScroll)

function headerScroll (){
  if(window.pageYOffset > headerFixed + 115){
    header.classList.add("headerFixed")
    headerLogo.style.display = "none"
  }else{
    header.classList.remove("headerFixed")
    headerLogo.style.display = "flex"
  }
}
