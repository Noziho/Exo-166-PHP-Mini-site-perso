const errorOrSucessMessage = document.querySelector('.error-message');
const username = document.querySelector("#id-username");
const user_mail = document.querySelector('#id-mail');
const user_message = document.querySelector('#id-message');

/**
function checkRange (min, max , input, errorMessage) {
    input.addEventListener('keypress', function () {
        if (input.value.length < min || input.value.length > max) {
            input.setCustomValidity(errorMessage);
        }
        else {
            input.setCustomValidity('');
        }
    })

}

checkRange(5, 7, username, "La longueur du pseudo doit-être comprise entre 5 et 7 caractères.");
checkRange(7, 120, user_mail, "La longueur de l'adresse mail doit-être comprise entre 7 et 120 caractères.");
checkRange(25, 255, user_message, "La longueur du message doit-être comprise entre 25 et 255 caractères.");
 **/

if (errorOrSucessMessage) {
    setTimeout(function () {
        $('.error-message').slideUp('fast');
    },4000);
}
