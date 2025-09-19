let menu =document.querySelector('#menu-icon');
let navbar =document.querySelector('.navbar-edit');
let bar =document.querySelector('.fa-bars');

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

