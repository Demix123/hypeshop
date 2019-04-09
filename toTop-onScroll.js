window.onscroll = function(){
    let btnToTop = document.querySelector('.arrow-frame');
    btnToTop.style.opacity = '0.9';
    btnToTop.style.transition = '1s';

    btnToTop.addEventListener('click', function(){
        this.classList.add = 'scroll-bevavior';
    })
}