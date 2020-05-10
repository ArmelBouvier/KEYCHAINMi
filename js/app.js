/*
* Fonction de copie dans le clipboard
*/
var copyButton = document.querySelector(".copy");

copyButton.addEventListener('click', function(event) {
    var copyPasswordCell = document.querySelector('.pwd');
    copyPasswordCell.focus();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'réussi' : 'échoué';
        alert('La copie du mot de passe a ' + msg);
    } catch (err) {
        alert('La copie du mot de passe n\'a pas fonctionné');
    }
});

/*
* Fonction d'affichage/masquage des mots de passe
*/
var showButton = document.querySelector(".showButton");
var hideButton = document.querySelector(".hideButton");

$(document).ready(function(){
    $(".hiddenPassword").hide();
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $(".hideButton").click(function(){
        $(".hiddenPassword").hide();
    });

    //Dès qu'on clique sur #b1, on applique show() au titre
    $(".showButton").click(function(){
        $(".hiddenPassword").show();
    });
});