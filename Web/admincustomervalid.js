//admin design validations
var mail = document.getElementById('mail');
var name1 = document.getElementById('name');
var pass = document.getElementById('pass');
var no = document.getElementById('no');
var searchtext=document.getElementById('searchtext');


//getting buttons
const addbtn=document.querySelector('#add');
const Updatebtn=document.querySelector("#Update");
const Deletebtn=document.querySelector("#Delete");
const Viewbtn=document.querySelector("#View");
const searchbtn=document.querySelector("#searchbtn");


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




//functions

function addfun(){
    let valid=true;
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
        valid=false;
    }else  if(name1.value.trim()===''){
        setError(name1,'Name is Required...');
        valid=false;
    }else  if(pass.value.trim()===''){
        setError(pass,'Password is Required...');
        valid=false;
    }else if(pass.value.trim().length<8){
        setError(pass,'Password must be atleast 8 character!!!')
        valid=false;
    }else if(no.value.trim()===''){
        setError(no,'Number is Required...');
        valid=false;
    }else if(no.value.trim().length<10){
        setError(no,'Contact Number must be 10 digits')
        valid=false;
    }else if(no.value.trim().length>10){
        setError(no,'Contact Number must be 10 digits')
        valid=false;
    }else{
        setSuccess(no);
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
    }else  if(name1.value.trim()===''){
        setError(name1,'Name is Required...');
        valid=false;
    }else  if(pass.value.trim()===''){
        setError(pass,'Password is Required...');
        valid=false;
    }else if(pass.value.trim().length<8){
        setError(pass,'Password must be atleast 8 character!!!')
        valid=false;
    }else if(no.value.trim()===''){
        setError(no,'Number is Required...');
        valid=false;
    }else if(no.value.trim().length<10){
        setError(no,'Contact Number must be 10 digits');
        valid=false;
    }else if(no.value.trim().length>10){
        setError(no,'Contact Number must be 10 digits');
        valid=false;
    }else{
        setSuccess(no);
    }
    return valid;
}

function Deletefun(){
    let valid=true;
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
        valid=false;
    }else{
        setSuccess(mail);
    }
    return valid;
}

function Viewfun(){
    let valid=true;
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
        valid=false;
    }else{
        setSuccess(mail);
    }
    return valid;
}


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