let size = document.querySelectorAll('.size-value');

for(let i = 0; i < size.length; i++){
    size[i].addEventListener('click', function(){
        size[i].style.backgroundColor = '#919191';
        size[i].style.color = 'white';
    })

    size[i].addEventListener('click', function(){
        if (size[i].style.backgroundColor == '#919191' && size[i].style.color == 'white'){
            size[i].style.backgroundColor = 'white';
            size[i].style.color = 'black';
        }
    })
}