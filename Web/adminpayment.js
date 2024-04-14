//admin design validations
var mail = document.getElementById('mail');
var paymentid = document.getElementById('paymentid');
var amount = document.getElementById('amount');
var status1 = document.getElementById('status');
var searchtext=document.getElementById('searchtext');



//getting buttons
const addbtn=document.querySelector('#add');
const Updatebtn=document.querySelector("#Update");
const Deletebtn=document.querySelector("#Delete");
const Viewbtn=document.querySelector("#View");
const searchbtn=document.getElementById("searchbtn");


addbtn.addEventListener('click',(e1)=>{
    if(!addfun()){
        e1.preventDefault();
    }
});
Updatebtn.addEventListener('click',(e1)=>{
    if(!Updatefun()){
        e1.preventDefault();
    }
});
Deletebtn.addEventListener('click',(e1)=>{
    if(!Deletefun()){
        e1.preventDefault();
    }
});
// Viewbtn.addEventListener('click',(e1)=>{
//     if(!Viewfun()){
//         e1.preventDefault();
//     }
// });
searchbtn.addEventListener('click',(e1)=>{
    if(!searchfun()){
        e1.preventDefault();
    }
});






















function searchfun() {
    let valid=true;
    if (searchtext.value.trim() === '') {
        setError(searchtext, 'Enter any values to search');
        valid=false;
    } else {
        setSuccess(searchtext);
    }
    return valid;
}




//functions

function addfun(){
    let valid=true;
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
        valid=false;
    }else  if(paymentid.value.trim()===''){
        setError(paymentid,'paymentid is Required...');
        valid=false;
    }else  if(amount.value.trim()===''){
        setError(amount,'amount is Required...');
        valid=false;
    }else  if(status1.value.trim()===''){
        setError(status1,'status is Required...');
        valid=false;
    }else{
        setSuccess(status1);
    }
    return valid;
}

function Updatefun(){
    let valid=true;

    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
        valid=false;
    }else  if(paymentid.value.trim()===''){
        setError(paymentid,'paymentid is Required...');
        valid=false;
    }else  if(amount.value.trim()===''){
        setError(amount,'amount is Required...');
        valid=false;
    }else  if(status1.value.trim()===''){
        setError(status1,'status is Required...');
        valid=false;
    }else{
        setSuccess(status1);
    }
    return valid;
}

function Deletefun(){
    let valid=true;
    if(paymentid.value.trim()===''){
        setError(paymentid,'payment id is Required...');
        valid=false;
    }else{
        setSuccess(paymentid);
    }
    return valid;
}

function Viewfun(){
    let valid=true;
    if(paymentid.value.trim()===''){
        setError(paymentid,'payment id is Required...');
        valid=false;
    }else{
        setSuccess(paymentid);
    }
    return valid;
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