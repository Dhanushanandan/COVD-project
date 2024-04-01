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
      

//admin design validations
var mail = document.getElementById('mail');
var designid = document.getElementById('designid');
var file = document.getElementById('file');


//functions

function addfun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else  if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
    }else if(!file.files.length>0){
        setError(file,'File is Required...');
    }else{
        setSuccess(file);
    }
}

function Updatefun(){
    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
    }else  if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
    }else if(!file.files.length>0){
        setError(file,'File is Required...');
    }else{
        setSuccess(file);
    }
}

function Deletefun(){
    if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
    }else{
        setSuccess(designid);
    }
}

function Viewfun(){
    if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
    }else{
        setSuccess(designid);
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