document.querySelectorAll('.filter__category-title').forEach(e => {
    e.addEventListener('click', e=> {
        const menu = e.currentTarget.dataset.path;
        const targetElement = document.querySelector(`[data-target=${menu}]`);

        if(!targetElement.classList.contains('open')){
            targetElement.classList.add('open');
        } else {
            targetElement.classList.remove('open');
        }
    });
});

let checkChange = document.querySelectorAll('.filter__param-check');
let buttonApply = document.querySelector('.filter__apply-btn');
checkChange.forEach(e => {
    e.addEventListener('change',e =>{
        if(e.currentTarget.checked){
            buttonApply.classList.add('open');
        }   
    });
});
    
    