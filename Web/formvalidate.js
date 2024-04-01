

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
    e.preventDefault();
    ValidateInputs();
})

//register form submitting
registerform.addEventListener('submit',(e1)=>{
    e1.preventDefault();
    RegisterValidation();
})





//validating function login form
function ValidateInputs(){
    //trim use to remove extra spaces if user given

    if(loginemail.value.trim() ===''){
        setError(loginemail,'Email is Required...');
    }else if(!validateEmail(loginemail.value.trim())){
        setError(loginemail,'Please Enter a Valid Email!!!');
    }else{
        setSuccess(loginemail);
    }

    if(loginpass.value.trim() ===''){
        setError(loginpass,'Password Required...')
    }else if(loginpass.value.trim().length<8){
        setError(loginpass,'Password must be atleast 8 character!!!')
    }else{
        setSuccess(loginpass)
    }
}



//Validation fuction register form
function RegisterValidation(){

    if(registeremail.value.trim() ===''){
        setError(registeremail,'Email is Required...');
    }else if(!validateEmail1(registeremail.value.trim())){
        setError(registeremail,'Please Enter a Valid Email!!!');
    }else{
        setSuccess(registeremail);
    }

    if(registerpass.value.trim() ===''){
        setError(registerpass,'Password Required...')
    }else if(registerpass.value.trim().length<8){
        setError(registerpass,'Password must be atleast 8 character!!!')
    }else{
        setSuccess(registerpass)
    }


    if(registerName.value.trim() === ''){
        setError(registerName,'Name is Required...')
    }else{
        setSuccess(registerName)
    }

    


    if(registerContact.value.trim() === ''){
        setError(registerContact,'Contact Number is Required...')
    }else if(registerContact.value.trim().length<10){
        setError(registerContact,'Contact Number must be 10 digits')
    }else if(registerContact.value.trim().length>10){
        setError(registerContact,'Contact Number must be 10 digits')
    }else{
         setSuccess(registerContact);
    }



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