//get the id in login form
const loginform=document.querySelector('#Home');
const loginemail=document.querySelector('#emailtext');
const loginpass=document.querySelector('#passwordtext');


//get the id in register form

const registerform=document.querySelector('#registerform');
const registeremail=document.querySelector('#reemailtext');
const registerpass=document.querySelector('#repasswordtext');
const registerName=document.querySelector('#Nametext');
const registerContact=document.querySelector('#contacttext');





//while login form submitting
loginform.addEventListener('submit',(e)=>{

    //check wether if any occure form will not submit,Return true or false
    if(!ValidateInputs()){
        e.preventDefault();
    }
})

// //register form submitting
registerform.addEventListener('submit',(e1)=>{
   
    if(!RegisterValidation()){
        e1.preventDefault();
    }
});





//validating function login form
function ValidateInputs(){
    //trim use to remove extra spaces if user given
    let valid=true;

    if(loginemail.value.trim() ===''){
        setError(loginemail,'Email is Required...');
        valid=false;
    }else if(!validateEmail(loginemail.value.trim())){
        setError(loginemail,'Please Enter a Valid Email!!!');
        valid=false;
    }else{
        setSuccess(loginemail);
    }

    if(loginpass.value.trim() ===''){
        setError(loginpass,'Password Required...')
        valid=false;
    }else if(loginpass.value.trim().length<8){
        setError(loginpass,'Password must be atleast 8 character!!!')
        valid=false;
    }else{
        setSuccess(loginpass)
    }

    return valid;
}



//Validation fuction register form
function RegisterValidation(){
    let valid=true;

    if(registeremail.value.trim() ===''){
        setError(registeremail,'Email is Required...');
        valid=false;
    }else if(!validateEmail1(registeremail.value.trim())){
        setError(registeremail,'Please Enter a Valid Email!!!');
        valid=false;
    }else{
        setSuccess(registeremail);
    }

    if(registerpass.value.trim() ===''){
        setError(registerpass,'Password Required...')
        valid=false;
    }else if(registerpass.value.trim().length<8){
        setError(registerpass,'Password must be atleast 8 character!!!')
        valid=false;
    }else{
        setSuccess(registerpass)
    }


    if(registerName.value.trim() === ''){
        setError(registerName,'Name is Required...')
        valid=false;
    }else{
        setSuccess(registerName)
    }

    


    if(registerContact.value.trim() === ''){
        setError(registerContact,'Contact Number is Required...')
        valid=false;
    }else if(registerContact.value.trim().length<10){
        setError(registerContact,'Contact Number must be 10 digits')
        valid=false;
    }else if(registerContact.value.trim().length>10){
        setError(registerContact,'Contact Number must be 10 digits')
        valid=false;
    }else{
         setSuccess(registerContact);
    }

    return valid;

    // else if(Number.isInteger(registerContact.value)){
    //     setError(registerContact,'Contact Number must be Only Numbers')
    // }
    
}








 //error messsage
function setError(element,message){
    //choose the parent div
    const data = element.parentElement;
    const errorelement=data.querySelector('.error');
    
    errorelement.innerText =message;
    data.classList.add('error');
    data.classList.remove('success');

}


//Succcess function
function setSuccess(element,message){
    const data = element.parentElement;
    const errorelement=data.querySelector('.error');

    errorelement.innerText ='';
    data.classList.add('success');
    data.classList.remove('error');
}












//login email validation
const validateEmail=(loginemail)=>{
    return String(loginemail)
    .toLowerCase()
    .match(
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

//register email validation
const validateEmail1=(registeremail)=>{
    return String(registeremail)
    .toLowerCase()
    .match(
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};