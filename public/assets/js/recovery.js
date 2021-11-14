
const scrollUpBtn = document.querySelector(".scrollUpBtn"); // le scrollUpbtn
const toolbar = document.querySelector(".toolbar");
const tb_logo = document.querySelector(".tb_logo");
var tbar_h = toolbar.clientHeight; //hauteur de la toolbar

vh = window.innerHeight;

window.onscroll = (e) => { // lorsque le scrool est actionné

    // on recupère le position de la position de la scrollbar
    scrollPos = {
        x : window.scrollX, 
        y : window.scrollY
    };

    if(scrollPos.y >= vh){// si la position de la scrollbar est sup ou egale a la taille de l'ecran utilisateur, le boutton scrollUp se montre
        scrollUpBtn.classList.add("slideUp");
    }else{ // sinon il se range 
        scrollUpBtn.classList.remove("slideUp");
    }

   

    if(scrollPos.y > 140){
        toolbar.classList.add("shrink-up");
        tb_logo.classList.remove("tb_logo");
        tb_logo.classList.add("appear");
    }else{
        toolbar.classList.remove("shrink-up");
        tb_logo.classList.remove("appear");
        tb_logo.classList.add("tb_logo");
    }

};