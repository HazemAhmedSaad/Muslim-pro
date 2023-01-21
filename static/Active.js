function toggleactive(){
    var item = document.querySelectorAll('.wui-side-menu-item');
    for(var i = 0; i < item.length; i++){
        item[i].addEventListener('click', function(e){

            
            var target = e.target;
             
            if(target.classList.contains('active')){
                target.classList.remove('active');
            }
            else{
                target.classList.add('active');
                var other = document.querySelectorAll('.wui-side-menu-item');
                for(var j = 0; j < other.length; j++){
                    if(other[j] !== target){
                        other[j].classList.remove('active');
                    }
                }
            }

        });
   }
}


document.addEventListener('DOMContentLoaded', toggleactive);

