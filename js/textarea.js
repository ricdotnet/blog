var editor = new MediumEditor('.textarea', {
                toolbar: {
                    buttons: ['bold', 'italic', 'underline', 'quote', 'anchor', 'image', 'orderedlist', 'unorderedlist', 'h1', 'h2']
                }
            });

/*var quill = new Quill('#textarea', {
    theme: 'bubble',
    scrollingContainer: '.bottom', 
    placeholder: 'Compose an epic...'
});

var textarea=document.querySelector("textarea");
var textarea_hidden=document.querySelector("textarea_hidden");

var form = document.querySelector('form');
form.onsubmit = function() {
   textarea_hidden.value=quill.getContents();
}*/
