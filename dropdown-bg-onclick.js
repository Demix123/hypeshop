window.onload = function(){
    let dropDown_a = document.getElementById('navbarDropdownMenuLink');
    
    dropDown_a.addEventListener('click', function(){
        
        if (dropDown_a.style.background == 'lightgrey' && dropDown_a.style.borderRadius == '5px'){
            let allContent = document.querySelector('body');
            
            allContent.addEventListener('click', function(){
                dropDown_a.style.background = '#DEDEDE';
            })

            dropDown_a.style.background = '#DEDEDE';
        } else {
            this.style.background = 'lightgrey';
            this.style.borderRadius = '5px';
        }
    })
}  