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

bSchool.addEventListener("change", function () {
    let nbS = bAll.length;
    for (let i = 0; i < nbS; i++) {
        bAll[i].classList.add("d-none");
    }
    let school = bSchool.value;
    const bChoice = document.querySelector(`fieldset[data-target="${school}"]`);
    bChoice.classList.remove("d-none");
})