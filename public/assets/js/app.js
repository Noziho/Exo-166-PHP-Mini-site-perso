const errorOrSucessMessage = document.querySelector('.error-message');
if (errorOrSucessMessage) {
    setTimeout(function () {
        $('.error-message').slideUp('fast');
    },4000);
}
