
const navbar = document.querySelector(".navbar");


navbar.onclick = () =>{
    navbar.classList.toggle("active")
}


window.onscroll = () =>{
    navbar.classList.remove("active")
}

function hideAlert() {
    setTimeout(function() {
      document.querySelector('.alert').style.display = 'none';
    }, 3000);
  }

  document.addEventListener('DOMContentLoaded', hideAlert);
