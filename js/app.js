/*
* Fonction de copie dans le clipboard
*/

var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

copyTextareaBtn.addEventListener('click', function(event) {
    var copyTextarea = document.querySelector('.js-copytextarea');
    copyTextarea.focus();
    copyTextarea.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'réussie' : 'infructueuse';
        alert('La copie est ' + msg);
    } catch (err) {
        alert('Désolé la copie a échoué !');
    }
});