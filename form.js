window.onload = function(){

    let btn = document.querySelector('.submit');

    function stop(event){
        event.preventDefault();
    }

    btn.addEventListener('click', stop, false);


    btn.addEventListener('click', function(){
      
        let form = document.querySelector('#modal_form');
        let overlay = document.querySelector('#overlay');
        form.style.display = 'block';
        overlay.style.display = 'block';
       
        let close = document.querySelector('#modal_close');
        close.addEventListener('click', function(){
            form.style.display = 'none';
            overlay.style.display = 'none';
        })

        
        

    })


}