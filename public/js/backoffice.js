
tinymce.init({selector: "textarea"});

const flashMessage = document.querySelector('.flash-messages');
if (flashMessage) {
    setTimeout(function() {
        flashMessage.remove();
    }, 2000);
}