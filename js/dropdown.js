let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.sub-menu'), //ul li a
<<<<<<< HEAD
buttonClick = document.querySelector('.check-button'), //button
hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener( 'click', () => {
    dropdown.classList.toggle('show-dropdown');
    if( submenu ){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
})
=======
buttonclick = document.querySelector('.check-button'), //button
hamburger = document.querySelector('.menu-icon');

buttonclick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    if(submenu){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
});
>>>>>>> b3b77b27b646aa4ecdffedf157de89685a4b9980
