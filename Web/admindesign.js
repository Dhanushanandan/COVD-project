//admin design validations
const mail = document.getElementById('mail');
const designid = document.getElementById('designid');
const file = document.getElementById('file');
const designform=document.querySelector('#designform');
const searchtext=document.querySelector('#searchtext');


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
        alert("in1");
        if(!searchfun()){
            e1.preventDefault();
        }
    });





function searchfun() {
    let valid=true;
   alert("In");
    if (searchtext.value.trim() === '') {
        // setError(searchtext, 'Enter any values to search');
        alert("Enter a value");
        valid=false;
    } else {
        setSuccess(searchtext);
    }
    return valid;
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
      


//functions

function addfun(){

    let valid=true;

    if(mail.value.trim() ===''){
        setError(mail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(mail.value.trim())){
        setError(mail,'Please Enter a Valid Email!!!');
        valid=false;
    }else  if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
        valid=false;
    }else if(!file.files.length>0){
        setError(file,'File is Required...');
        valid=false;
    }else{
        setSuccess(file);
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
    }else  if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
        valid=false;
    }else if(!file.files.length>0){
        setError(file,'File is Required...');
        valid=false;
    }else{
        setSuccess(file);
    }
    return valid;

}

function Deletefun(){
    let valid=true;

    if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
        valid=false;
    }else{
        setSuccess(designid);
    }
    return valid;
}

function Viewfun(){
    
    let valid=true;
    if(designid.value.trim()===''){
        setError(designid,'Design Id is Required...');
        valid =false;
    }else{
        setSuccess(designid);
    }
    // alert("nothig");
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








//image load in the div when click the image ,get the image as a parameter from the php file

function divview(selectimge){
    //get the image div container using id
    var imagecontainer=document.getElementById('img');

    //clear the previous image in div
    imagecontainer.innerHTML='';

    //create new element for the image to load in the div
    var imgElement =document.createElement('img');

    
    imgElement.src='Image/' + selectimge;

    imgElement.style.width='100%';
    imgElement.style.height='100%';
    imgElement.style.borderRadius='50px';

    //load the image inside the div
    imagecontainer.appendChild(imgElement);

}