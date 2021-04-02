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

bChoiceSchool.addEventListener("change", function () {
    let school = bChoiceSchool.value;

    switch (school) {
        case "randan":
            affSchool(bRandan, bAigueperse, bMaringues)
            break;
        case "aigueperse":
            affSchool(bAigueperse, bRandan, bMaringues)
            break;
        case "maringues":
            affSchool(bMaringues, bAigueperse, bRandan)
            break;
        default:
            break;
    }
})

function affSchool(bCity, b1, b2) {
        bCity.classList.remove('d-none');
        majNone(b1);
        majNone(b2);
        return;
}

function majNone(b) {
    if (b.hasClass("d-none") == false) {
        b.classList.add('d-none');
    }
    return;
}