window.onload = function(){
    var navCategories = document.querySelectorAll('.collapse ul .dropdown .dropdown-menu a');

    for(let i = 0; i < navCategories.length; i++){
        navCategories.onclick = function(){
            navCategories.style.color = 'black';
        }
    }
}