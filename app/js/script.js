const button = document.getElementById('mm__show-r2');
const r2 = document.getElementById('mm__r2');
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


const bChoiceSchool = document.getElementById("school");
const bRandan = document.getElementById("randan");
const bAigueperse = document.getElementById("aigueperse");
const bMaringues = document.getElementById("maringues");

bChoiceSchool.addEventListener("onchange", e => {
    let school = bChoiceSchool.nodeValue;

    if (school == "randan") {
        bRandan.classList.remove('d-none');
    } else if (school == "aigueperse") {
        bAigueperse.classList.remove('d-none');
    } else {
        bMaringues.classList.remove('d-none');
    }
})