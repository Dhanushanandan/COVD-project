function searchfun() {
    var input = document.getElementById('searchtext');
    if (input.value.trim() === '') {
        setError(input, 'Enter any values to search');
    } else {
        setSuccess(input);
    }
}

//error messsage
function setError(element, message) {
    //choose the parent div
    const data = element.parentElement;
    const errorelement = data.querySelector('.error');

    errorelement.innerText = message;
    data.classList.add('error');
    data.classList.remove('success');

}
//Succcess function
function setSuccess(element, message) {
    const data = element.parentElement;
    const errorelement = data.querySelector('.error');

    errorelement.innerText = '';
    data.classList.add('success');
    data.classList.remove('error');
}

































