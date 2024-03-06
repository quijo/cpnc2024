const menu = document.getElementById('menu')
const toggleMenu = document.getElementById('menu-list')
const arrow = document.getElementById('arrow-left')





menu.addEventListener('click',function(){
    toggleMenu.classList.toggle('menu-active');

})

function hide(){
    toggleMenu.classList.toggle('menu-active')
    arrow.classList.toggle('active')

   
}

function redirect(){
    window.location='https://vnbc-essentiel.ckgroup.ph';

}

