let bigPhoto = document.querySelector('.bph img');
let allPhoto = document.querySelectorAll('.small img');

for (let i in allPhoto){
    allPhoto[i].onmouseover = function(){
        bigPhoto.src = this.src;
    }
}