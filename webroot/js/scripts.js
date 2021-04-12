function clearForm() {
    window.confirm("Are you sure you want to clear the text?");
}

function validateForm() {
    var subButton = document.getElementById('submitButton');
    var inputTitle = document.getElementById('title');
    var inputContent = document.getElementById('blogContent');

    blogForm.addEventListener('click', function(event) {
        if (inputTitle.value === '' || blogContent.value === '') {
            title.setAttribute("style", "box-shadow: 0 0 10px red;");
            inputContent.setAttribute("style", "box-shadow: 0 0 10px red;");
            //event.preventDefault();
        } else {

        }

    }, false)
}