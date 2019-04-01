    let w = document.querySelector('.wText');
    let s = document.querySelectorAll('.size-value');
    let btn = document.getElementById('check');

    function stop(event){
        event.preventDefault();
    }

    btn.addEventListener('click', stop, false);
    btn.addEventListener('click', function(){
        for(let i = 0; i< s.length; i++){
            if (!s[i].classList.contains('size-active')){
                w.textContent = 'Виберіть ваш розмір';
                btn.disabled = 'true'; 
            }
        
        }
    })
    
    
