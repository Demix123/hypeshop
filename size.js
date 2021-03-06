window.onload = function(){
    let size = document.querySelectorAll('.size-value');
    let a;
    var selected_size;
    var model = document.querySelector('.model').textContent;
    for (let i = 0; i < size.length; i++) {
        size[i].addEventListener('click', function () {
            if (a >= 0 && a < size.length) {
                size[a].classList.remove('size-active');
            }
            this.classList.add('size-active');
            a = i;
        })
    }

    let btn_add = document.querySelector('.form-inline .submit');
    let warningText = document.querySelector('.wText');

    function stop(event) {
        event.preventDefault();
    }

    btn_add.addEventListener('click', stop, false);

    btn_add.addEventListener('click', function () {
        for (let i = 0; i < size.length; i++) {
            if (!size[i].classList.contains('size-active')) {
                warningText.textContent = 'Виберіть ваш розмір!';
            }
            else {
                warningText.textContent = '';
                selected_size = size[i].textContent;
                document.forms[1].elements['size'].value = selected_size;
                document.forms[1].elements['model'].value = model;
                let form = document.querySelector('#modal_form');
                let overlay = document.querySelector('#overlay');
                form.style.display = 'block';
                overlay.style.display = 'block';


                let close = document.querySelector('#modal_close');
                close.addEventListener('click', function () {
                    warningText.textContent = '';
                    form.style.display = 'none';
                    overlay.style.display = 'none';
                })

                let btn_submit = document.querySelector('.pay');

                btn_submit.addEventListener('click', stop, false);

                let form_submit = document.forms[1];
                let userName = document.forms[1].elements['user-name'];
                let tel = document.forms[1].elements['tel'];
                let region = document.forms[1].elements['region'];
                let town = document.forms[1].elements['town'];
                let post = document.forms[1].elements['post'];
                let isConfirm = document.getElementById('confirm');
                let warning_name = document.querySelector('.w-name');
                let warning_tel = document.querySelector('.w-tel');
                let warning_region = document.querySelector('.w-region');
                let warning_town = document.querySelector('.w-town');
                let warning_post = document.querySelector('.w-post');
                let warning_check = document.querySelector('.w-check');
              


                userName.addEventListener('input', function(){
                    if (userName.value.length < 5 || !userName.value.includes(' ')) {
                        userName.classList.add('is-invalid');
                        warning_name.textContent = "Правильно заповніть своє ім'я та прізвище!";
                    } else {
                        userName.classList.remove('is-invalid');
                        warning_name.textContent = "";
                    }
                })
                
                tel.addEventListener('input', function(){
                    if (tel.value.length <= 12 || !tel.value.includes('+')) {
                        tel.classList.add('is-invalid');
                        warning_tel.textContent = "Правильно заповніть свій номер телефону!";
                    } else{
                        tel.classList.remove('is-invalid');
                        warning_tel.textContent = "";  
                    }
                });

                region.addEventListener('input', function(){
                    if (region.value.length <= 2) {
                        region.classList.add('is-invalid');
                        warning_region.textContent = "Правильно заповніть область!";
                    } else{
                        region.classList.remove('is-invalid');
                        warning_region.textContent = "";
                    }
                });

                town.addEventListener('input', function(){
                    if (town.value.length <= 2) {
                        town.classList.add('is-invalid');
                        warning_town.textContent = "Правильно заповніть місто доставки!";
                    } else{
                        town.classList.remove('is-invalid');
                        warning_town.textContent = "";
                    }
                });

                post.addEventListener('input', function(){
                    if (isNaN(post.value) || post.value.length < 1) {
                        post.classList.add('is-invalid');
                        warning_post.textContent ="Правильно заповніть номер відділення!";
                    } else{
                        post.classList.remove('is-invalid');
                        warning_post.textContent ="";
                    }
                });   
                
                btn_submit.addEventListener('click', function(){
                    if( (isConfirm.checked) && (!isNaN(post.value)) && !(post.value.length < 1) && !(town.value.length <= 2) && !(region.value.length <= 2) && !(tel.value.length <= 12) && (tel.value.includes('+')) && !(userName.value.length < 5) && (userName.value.includes(' '))){
                        warning_check.textContent = "";
                        form_submit.submit();
                    } else {
                        warning_check.textContent = "Потрібно підтвердити замовлення та заповнити всі поля!!!";
                    }    
                })
                
            }
        }
    })
}