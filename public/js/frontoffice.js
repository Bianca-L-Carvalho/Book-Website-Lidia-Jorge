
// Abrir e fechar  menu hamburguer
const menuHamburguer = document.querySelectorAll(".imageOpen");
const menuClose = document.querySelectorAll(".imageClose");
const menuList = document.querySelectorAll(".menuList");

for (let i = 0; i < menuHamburguer.length; i++) {
    menuClose[i].classList.add("closed");
    menuList[i].classList.add("closed");

    menuHamburguer[i].addEventListener("click", function () {
        menuClose[i].classList.remove("closed");
        menuList[i].classList.remove("closed");
        menuHamburguer[i].classList.add("closed");
    })
    

 } 

 for (let i = 0; i < menuClose.length; i++) {

    menuClose[i].addEventListener("click", function () {
    
        menuClose[i].classList.add("closed");
        menuList[i].classList.add("closed");
        menuHamburguer[i].classList.remove("closed");
    })
    

 } 




// abrir e fechar submenu

const menuItemBook = document.querySelectorAll(".ItemBooks");
const submenuItems = document.querySelectorAll(".submenuItems");

for (let i = 0; i < menuItemBook.length; i++) {
    submenuItems[i].classList.add("closed");

    menuItemBook[i].addEventListener("click", function () {
        if (submenuItems[i].classList.contains("closed")) {
            submenuItems[i].classList.remove("closed");
    
        } else {
            submenuItems[i].classList.add("closed");
        }
    }
 )} 



// adicionar efeito de  seleção sobre botões

const buttonOrange = document.querySelectorAll(".buttonOrange");
const buttonGrey = document.querySelectorAll(".buttonGrey");


for (let i = 0; i < buttonOrange.length; i++) {
    buttonGrey[i].classList.add("closed");

    buttonOrange[i].addEventListener("mouseover", function () {
        if (buttonGrey[i].classList.contains("closed")) {
            buttonGrey[i].classList.remove("closed");
            buttonOrange[i].classList.add("closed");

    }}) 
}

for (let i = 0; i < buttonGrey.length; i++) {
    buttonGrey[i].addEventListener("mouseout", function () {
        if (buttonOrange[i].classList.contains("closed")) {
            buttonOrange[i].classList.remove("closed");
            
            buttonGrey[i].classList.add("closed");

    }}) 
}


// Mostrar conteúdo de texto oculto da página page_author.php

const seeMoreButtonOrange = document.querySelector("#see-more-orange");
const seeMoreButtonGrey = document.querySelector("#see-more-grey");
const goBackButtonOrange = document.querySelector("#go-back-orange");
const goBackButtonGrey = document.querySelector("#go-back-grey");
const textArea = document.querySelector(".author-text-area");
const seeMoreArea = document.querySelector("#see-more");
const goBackArea = document.querySelector("#go-back");


goBackArea.classList.add("closed");

seeMoreButtonGrey.addEventListener("click", function() {
    goBackArea.classList.remove("closed");
    seeMoreArea.classList.add("closed");
    textArea.classList.remove("over-flow");
    
})

goBackButtonGrey.addEventListener("click", function() {
    seeMoreArea.classList.remove("closed");
    goBackArea.classList.add("closed");
    textArea.classList.add("over-flow");
    
})

// abrir submenu ao clicar no link do rodapé 
