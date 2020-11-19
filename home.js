burger= document.querySelector('.burger')
navmenu = document.querySelector('.nav-menu')
navlist= document.querySelector('.nav-list')

burger.addEventListener('click',()=>{
    navmenu.classList.toggle('h-nav-resp');
    navlist.classList.toggle('v-class-resp');

})