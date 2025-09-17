let menu =document.querySelector('#menu-icon');
let navbar =document.querySelector('.navbar-edit');
let bar =document.querySelector('.fa-bars');

// document.addEventListener('mousemove', function (e) {
//   const box = document.getElementById('move-it');
//   const moveX = (e.clientX - window.innerWidth / 2) / 25;
//   const moveY = (e.clientY - window.innerHeight / 2) / 25;

//   box.style.transform = `translate(${moveX}px, ${moveY}px)`;
 
// });
menu.onclick=()=>{
    if(bar.classList.contains("fa-bars")){
    bar.classList.replace("fa-bars","fa-x");
    }
     else{
     bar.classList.replace("fa-x","fa-bars");
    }
    navbar.classList.toggle('show');
    console.log(22);

}