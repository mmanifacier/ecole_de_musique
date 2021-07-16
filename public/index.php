<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- FORM -->
    <form id="form" action="" method="post">
        <!-- STUDENT -->
        <fieldset>
            <legend>Elève</legend>

            <label for="last-name-s"></label>
            <input type="text" name="last-name-s" id="last-name-s" placeholder="NOM" autofocus>

            <label for="first-name-s"></label>
            <input type="text" name="first-name-s" id="first-name-s" placeholder="PRENOM">

            <label for="birth-s"></label>
            <input type="date" name="birth-s" id="birth-s">

            <label for="tel-s"></label>
            <input type="tel" name="tel-s" id="tel-s" placeholder="TELEPHONE">

            <label for="mail-s"></label>
            <input type="email" name="mail-s" id="mail-s" placeholder="votre.adresse@email.com">

            <label for="address-s"></label>
            <input type="text" name="address-s" id="address-s" placeholder="ADRESSE">

            <label for="CP-s"></label>
            <input type="number" name="CP-s" id="CP-s" placeholder="CODE POSTAL">

            <label for="town-s"></label>
            <input type="text" name="town-s" id="town-s" placeholder="VILLE">
            
        </fieldset>

        <!-- LEGAL RESPONSIBLE 1 -->
        <fieldset>
            <legend>Responsable légal 1</legend>

            <p>Sélectionner votre lien avec l'élève :</p>

            <div>
                <input type="radio" id="parent" name="link-student-r1" value="parent"
                        >
                <label for="parent">Parent</label>
            </div>

            <div>
                <input type="radio" id="tuteur" name="link-student-r1" value="tuteur">
                <label for="tuteur">Tuteur</label>
            </div>

            <div>
                <input type="radio" id="other" name="link-student-r1" value="other">
                <label for="other">Autre</label>
            </div>

            <label for="last-name-r1"></label>
            <input type="text" name="last-name-r1" id="last-name-r1" placeholder="NOM">

            <label for="first-name-r1"></label>
            <input type="text" name="first-name-r1" id="first-name-r1" placeholder="PRENOM">

            <label for="tel-r1"></label>
            <input type="tel" name="tel-r1" id="tel-r1" placeholder="TELEPHONE">

            <label for="mail-r1"></label>
            <input type="email" name="mail-r1" id="mail-r1" placeholder="votre.adresse@email.com">
            
        </fieldset>

        <!-- BUTTON: Hide and see LR2 -->
        <button type="submit" id="mm__show-r2" class="mm__button-r2 btn btn-light btn-outline-secondary">Entrez un deuxième responsable légal</button>

        <!-- LEGAL RESPONSIBLE 2 -->
        <fieldset id="mm__r2" class="d-none">
            <legend>Responsable légal 2</legend>

            <p>Sélectionner votre lien avec l'élève :</p>

            <div>
                <input type="radio" id="parent" name="link-student-r2" value="parent"
                        >
                <label for="parent">Parent</label>
            </div>

            <div>
                <input type="radio" id="tuteur" name="link-student-r2" value="tuteur">
                <label for="tuteur">Tuteur</label>
            </div>

            <div>
                <input type="radio" id="other" name="link-student-r2" value="other">
                <label for="other">Autre</label>
            </div>

            <label for="first-name-r2"></label>
            <input type="text" name="first-name-r2" id="first-name-r2" placeholder="PRENOM">

            <label for="last-name-r2"></label>
            <input type="text" name="last-name-r2" id="last-name-r2" placeholder="NOM">

            <label for="tel-r2"></label>
            <input type="tel" name="tel-r2" id="tel-r2" placeholder="TELEPHONE">

            <label for="mail-r2"></label>
            <input type="email" name="mail-r2" id="mail-r2" placeholder="votre.adresse@email.com">

            <label for="address-r2"></label>
            <input type="text" name="address-r2" id="address-r2" placeholder="ADRESSE">

            <label for="CP-r2"></label>
            <input type="number" name="CP-r2" id="CP-r2" placeholder="CODE POSTAL">

            <label for="town-r2"></label>
            <input type="text" name="town-r2" id="town-r2" placeholder="VILLE">
            
        </fieldset>

        <!-- FAMILY QUOTIENT -->
        <fieldset>
            <legend>Quotient familial</legend>

            <label for="family-quotient"></label>
            <input type="number" name="family-quotient" id="family-quotient">
        </fieldset>

        <!-- SCHOOL CHOICE -->
        <fieldset>
            <legend>Ecole de musique</legend>
            <select id="school">
                <option value="no-choice">Choix de l'école de musique</option>
                <option value="randan">Randan</option>
                <option value="aigueperse">Aigueperse</option>
                <option value="maringues">Maringues</option>
            </select>
        </fieldset>

        <!-- CLASSES RANDAN -->
        <fieldset class="d-none" data-target="randan">
            <legend>Cours</legend>

            <select name="instrument" id="instrument">
                <option>Choix d'un instrument</option>

                <optgroup label="Bois">
                    <option value="clarinette">Clarinette</option>
                    <option value="saxo">Saxophone</option>
                    <option value="flute">Flûte traversière</option>
                </optgroup>

                <optgroup label="Cuivres">
                    <option value="trompette">Trompette</option>
                </optgroup>

                <optgroup label="Percussions">
                    <option value="batterie">Batterie</option>
                    <option value="percu">Percussions</option>
                </optgroup>

                <optgroup label="Cordes">
                    <option value="cor">Piano</option>
                    <option value="trombone">Guitare</option>
                    <option value="tuba">Accordéon</option>
                </optgroup>

            </select>


            <p>Sélectionner le cursus :</p>

            <div>
                <input type="radio" id="em" name="cours" value="em">
                <label for="em">Eveil musical</label>
            </div>

            <div>
                <input type="radio" id="fm1" name="cours" value="fm1">
                <label for="fm1">Formation musicale 1</label>
            </div>

            <div>
                <input type="radio" id="fm2" name="cours" value="fm2">
                <label for="fm2">Formation musicale 2</label>
            </div>

            <div>
                <input type="radio" id="fm3" name="cours" value="fm3">
                <label for="fm3">Formation musicale 3</label>
            </div>

            <div>
                <input type="radio" id="fm4" name="cours" value="fm4">
                <label for="fm4">Formation musicale 4</label>
            </div>

            <div>
                <input type="radio" id="fm5" name="cours" value="fm5">
                <label for="fm5">Formation musicale 5</label>
            </div>


            <p>Cours supplémentaires :</p>

            <div>
                <input type="checkbox" name="choral" id="choral">
                <label for="choral">Chorale adulte</label>
            </div>

            <div>
                <input type="checkbox" name="actu-music" id="actu-music">
                <label for="actu-music">Musiques actuelles</label>
            </div>

            <div>
                <input type="checkbox" name="junior-orchestra" id="junior-orchestra">
                <label for="junior-orchestra">Orchestre junior</label>
            </div>

            <div>
                <input type="checkbox" name="orchestra" id="orchestra">
                <label for="orchestra">Orchestre</label>
            </div>

        </fieldset>

        <!-- CLASSES AIGUEPERSE -->
        <fieldset class="d-none" data-target="aigueperse">
            <legend>Cours</legend>

            <select name="instrument" id="instrument">
                <option>Choix d'un instrument</option>

                <optgroup label="Bois">
                    <option value="clarinette">Clarinette</option>
                    <option value="saxo">Saxophone</option>
                    <option value="flute">Flûte traversière</option>
                </optgroup>

                <optgroup label="Cuivres">
                    <option value="cor">Cor d'harmonie</option>
                    <option value="trombone">Trombone</option>
                    <option value="trompette">Trompette</option>
                    <option value="tuba">Tuba</option>
                </optgroup>

                <optgroup label="Percussions">
                    <option value="batterie">Batterie</option>
                </optgroup>
            </select>


            <p>Sélectionner le cursus :</p>

            <div>
                <input type="radio" id="em" name="cours" value="em">
                <label for="em">Eveil musical</label>
            </div>

            <div>
                <input type="radio" id="fm1" name="cours" value="fm1">
                <label for="fm1">Formation musicale 1</label>
            </div>

            <div>
                <input type="radio" id="fm2" name="cours" value="fm2">
                <label for="fm2">Formation musicale 2</label>
            </div>

            <div>
                <input type="radio" id="fm3" name="cours" value="fm3">
                <label for="fm3">Formation musicale 3</label>
            </div>

            <div>
                <input type="radio" id="fm4" name="cours" value="fm4">
                <label for="fm4">Formation musicale 4</label>
            </div>

            <div>
                <input type="radio" id="fm5" name="cours" value="fm5">
                <label for="fm5">Formation musicale 5</label>
            </div>


            <p>Cours supplémentaires :</p>

            <div>
                <input type="checkbox" name="choral" id="choral">
                <label for="cuivres">Ensemble de Cuivres</label>
            </div>

            <div>
                <input type="checkbox" name="actu-music" id="actu-music">
                <label for="anches">Ensemble d'Anches</label>
            </div>

            <div>
                <input type="checkbox" name="orchestra" id="orchestra">
                <label for="orchestra">Orchestre</label>
            </div>

        </fieldset>

        <!-- CLASSES MARINGUES -->
        <fieldset class="d-none" data-target="maringues">
            <legend>Cours</legend>

            <select name="instrument" id="instrument">
                <option>Choix d'un instrument</option>

                <optgroup label="Bois">
                    <option value="clarinette">Clarinette</option>
                    <option value="saxo">Saxophone</option>
                    <option value="flute">Flûte traversière</option>
                </optgroup>

                <optgroup label="Cuivres">
                    <option value="trompette">Trompette</option>
                    <option value="trombone">Trombone</option>
                    <option value="tuba">Tuba</option>
                </optgroup>

                <optgroup label="Percussions">
                    <option value="batterie">Batterie</option>
                </optgroup>
            </select>


            <p>Sélectionner le cursus :</p>

            <div>
                <input type="radio" id="em" name="cours" value="em">
                <label for="em">Eveil musical</label>
            </div>

            <div>
                <input type="radio" id="fm1" name="cours" value="fm1">
                <label for="fm1">Formation musicale 1</label>
            </div>

            <div>
                <input type="radio" id="fm2" name="cours" value="fm2">
                <label for="fm2">Formation musicale 2</label>
            </div>

            <div>
                <input type="radio" id="fm3" name="cours" value="fm3">
                <label for="fm3">Formation musicale 3</label>
            </div>

            <div>
                <input type="radio" id="fm4" name="cours" value="fm4">
                <label for="fm4">Formation musicale 4</label>
            </div>

            <div>
                <input type="radio" id="fm5" name="cours" value="fm5">
                <label for="fm5">Formation musicale 5</label>
            </div>


            <p>Cours supplémentaires :</p>

            <div>
                <input type="checkbox" name="orchestra" id="orchestra">
                <label for="orchestra">Orchestre</label>
            </div>

        </fieldset>

        <!-- SUBMIT FORM -->
        <input id="submit-form" class="mm__button-r2 btn btn-light btn-outline-secondary" type="submit" value="Soumettre le formulaire">

        <!-- ERROR SPACE -->
        <div id="error-message"></div>
    </form>
    
    <!-- SCRIPTS -->
    <script src="../app/js/script.js"></script>
</body>
</html>
