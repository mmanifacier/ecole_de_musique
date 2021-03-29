let button = document.getElementById('mm__show-r2');
let r2 = document.getElementById('mm__r2');
let buttonDefaultText = button.innerHTML;

let show = false;

button.addEventListener('click', evt => {
    evt.preventDefault();
    if(show) {
        r2.classList.add('d-none');
        show = false;
        button.innerHTML = buttonDefaultText;
    } else {        
        r2.classList.remove('d-none');
        show = true;
        button.innerHTML = "Supprimer le deuxième responsable légal";
    }
})