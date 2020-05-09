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