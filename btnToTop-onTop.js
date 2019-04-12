window.onload = function(){
    let btnToTop = document.querySelector('.fa-chevron-up');

    if ((clientX,clientY) == 0 && (pageX,pageY) == 0){
        btnToTop.style.opacity = '0';
        btnToTop.style.transition = '0.5s';
    }
}