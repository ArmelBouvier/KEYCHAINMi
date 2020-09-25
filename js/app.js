/*
* Fonction de copie dans le clipboard
*/

var copyTextareaBtn = document.querySelectorAll('.js-textareacopybtn');

copyTextareaBtn.forEach(function (copyBtn) {
    copyBtn.addEventListener('click', function (event) {
        var copyTextarea = document.querySelector('.js-copytextarea');
        copyTextarea.focus();
        copyTextarea.select();

        try {
            var successful = document.execCommand('copy');
            console.log(successful);
            var msg = successful ? 'réussie' : 'infructueuse';
            alert('La copie est ' + msg);
        } catch (err) {
            alert('Désolé la copie a échoué !');
        }
    });
});


/*
 * Fonction d'affichage du mdp en clair
 */
let passwordReveal = document.querySelectorAll(".affichage");

passwordReveal.forEach(function (currentBtn) {
    currentBtn.addEventListener('click', function () {
        if (currentBtn.previousElementSibling.classList.contains("invisible")) {
            currentBtn.textContent = "Masquer";
            currentBtn.previousElementSibling.classList.remove("invisible");
        } else {
            currentBtn.textContent = "Afficher";
            currentBtn.previousElementSibling.classList.add("invisible");
        }
    })
})

/*
 * Fonction d'affichage du formulaire d'ajout d'url
 */
let formUrl = document.getElementById("formUrl");
let createUrl = document.getElementById("createUrl");

createUrl.addEventListener('click', function () {
    if (formUrl.classList.contains("invisible")) {
        createUrl.textContent = "Masquer";
        formUrl.classList.remove("invisible");
    } else {
        createUrl.textContent = "Créer un nouveau mot de passe";
        formUrl.classList.add("invisible");
    }
})
