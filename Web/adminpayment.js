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
var paymentid = document.getElementById('paymentid');
var amount = document.getElementById('amount');
var status1 = document.getElementById('status');


//functions

function addfun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else  if(paymentid.value.trim()===''){
        setError(paymentid,'paymentid is Required...');
    }else  if(amount.value.trim()===''){
        setError(amount,'amount is Required...');
    }else  if(status1.value.trim()===''){
        setError(status1,'status is Required...');
    }else{
        setSuccess(status1);
    }
}

function Updatefun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else  if(paymentid.value.trim()===''){
        setError(paymentid,'paymentid is Required...');
    }else  if(amount.value.trim()===''){
        setError(amount,'amount is Required...');
    }else  if(status1.value.trim()===''){
        setError(status1,'status is Required...');
    }else{
        setSuccess(status1);
    }
}

function Deletefun(){
    if(paymentid.value.trim()===''){
        setError(paymentid,'payment id is Required...');
    }else{
        setSuccess(paymentid);
    }
}

function Viewfun(){
    if(paymentid.value.trim()===''){
        setError(paymentid,'payment id is Required...');
    }else{
        setSuccess(paymentid);
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