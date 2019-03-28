let size = document.querySelectorAll('.size-value');
let a;
for(let i = 0; i < size.length; i++){
    size[i].addEventListener('click', function(){
        if(a >= 0 && a < size.length){
            size[a].classList.remove('size-active');
        }
        this.classList.add('size-active');
        a = i;
    })
}