let bigPhoto = document.querySelector('.bph img');
let allPhoto = document.querySelectorAll('.small img');

for (let i in allPhoto){
    allPhoto[i].onclick = function(){
        bigPhoto.src = this.src;
    }
}