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

    let btn_submit = document.querySelector('#modal_form input[type=submit]');
    btn_submit.addEventListener('click', stop, false);
    btn_submit.addEventListener('click', function(){
        let form = document.forms[1];
        let userName = document.forms[1].elements['user-name'];
        let email = document.forms[1].elements['e-mail'];
        let pay = document.forms[1].elements['pay'];
        let isConfirm = document.getElementById('confirm');
        
        let warning = document.querySelector('.red');

        if(!isConfirm.checked){
            warning.textContent = "Потрібно підтвердити замовлення!!!";
        } else{
            warning.textContent = "";
        }

        for(let i = 0; i < form.length; i++){
            if(form[i].classList.contains('is-invalid')){
                form[i].classList.remove('is-invalid');
            } 
        }

        if(userName.value.length < 2){
            userName.classList.add('is-invalid');
            warning.textContent += " Уважно заповніть ім'я користувача!"
        }

        if(email.value.length < 3 || !email.value.includes('@')){
            email.classList.add('is-invalid');
            warning.textContent += " Уважно заповніть електронну пошту!"
        }
    })
}