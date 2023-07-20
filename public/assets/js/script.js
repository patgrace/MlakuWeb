
const navbar = document.querySelector(".navbar");


navbar.onclick = () =>{
    navbar.classList.toggle("active")
}


window.onscroll = () =>{
    navbar.classList.remove("active")
}

