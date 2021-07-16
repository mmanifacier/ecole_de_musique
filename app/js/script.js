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


const bSchool = document.getElementById("school");
const bAll = document.querySelectorAll('fieldset[data-target]')
let school;

bSchool.addEventListener("change", function () {
    let nbS = bAll.length;
    for (let i = 0; i < nbS; i++) {
        bAll[i].classList.add("d-none");
    }
    school = bSchool.value;
    const bChoice = document.querySelector(`fieldset[data-target="${school}"]`);
    bChoice.classList.remove("d-none");
})


const bSubmit = document.getElementById("submit-form");
const bErrorMessage = document.getElementById("error-message");

bSubmit.addEventListener("click", function(event){
    event.preventDefault();
    if (school == "no-choice") {
        bErrorMessage.innerHTML = "Veuillez choisir une école de musique"
    } else {
        const formulaire = document.getElementById("form");
        formulaire.submit();
    }
})