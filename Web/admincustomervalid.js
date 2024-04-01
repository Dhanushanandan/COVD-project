function searchfun() {
    var input = document.getElementById('searchtext');
    if (input.value.trim() === '') {
        setError1(input, 'Enter any values to search');
    } else {
        setSuccess1(input);
    }
}

//error messsage
function setError1(element, message) {
    //choose the parent div
    const data = element.parentElement;
    const errorelement = data.querySelector('.error1');

    errorelement.innerText = message;
    data.classList.add('error1');
    data.classList.remove('success');

}

//Succcess function
function setSuccess1(element, message) {
    const data = element.parentElement;
    const errorelement = data.querySelector('.error1');

    errorelement.innerText = '';
    data.classList.add('success');
    data.classList.remove('error1');
}

//admin design validations
var mail = document.getElementById('mail');
var name1 = document.getElementById('name');
var pass = document.getElementById('pass');
var no = document.getElementById('no');


//functions

function addfun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else  if(name1.value.trim()===''){
        setError(name1,'Name is Required...');
    }else  if(pass.value.trim()===''){
        setError(pass,'Password is Required...');
    }else if(no.value.trim()===''){
        setError(no,'Number is Required...');
    }else if(no.value.trim().length<10){
        setError(no,'Contact Number must be 10 digits')
    }else if(no.value.trim().length>10){
        setError(no,'Contact Number must be 10 digits')
    }else{
        setSuccess(no);
    }
}

function Updatefun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else  if(name1.value.trim()===''){
        setError(name1,'Name is Required...');
    }else  if(pass.value.trim()===''){
        setError(pass,'Password is Required...');
    }else if(no.value.trim()===''){
        setError(no,'Number is Required...');
    }else if(no.value.trim().length<10){
        setError(no,'Contact Number must be 10 digits')
    }else if(no.value.trim().length>10){
        setError(no,'Contact Number must be 10 digits')
    }else{
        setSuccess(no);
    }
}

function Deletefun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else{
        setSuccess(mail);
    }
}

function Viewfun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else{
        setSuccess(mail);
    }
}

//email validation
const validateEmail1=(mail)=>{
    return String(mail)
    .toLowerCase()
    .match(
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

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