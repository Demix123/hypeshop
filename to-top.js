
    let btnToTop = document.querySelector('.fa-chevron-up');

    btnToTop.addEventListener('click', function(){
        let smoothJumpUp = function() {
            if (btnToTop.style.opacity == '0.9') { 
                console.log(btnToTop);
                window.scrollBy(0,-50); 
                setTimeout(smoothJumpUp, 10); 
        } 
        }
    })
