window.onscroll = function(){
    let btnToTop = document.querySelector('.fa-chevron-up');
    
    btnToTop.style.opacity = '0.9';
    btnToTop.style.transition = '0.5s';

    if (pageYOffset == 0 ){ 
        btnToTop.style.opacity = '0';
        btnToTop.style.transition = '0.5s';
    }
}