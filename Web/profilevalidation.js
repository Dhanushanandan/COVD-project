
// <!-- validation -->

  //get the id in profile form

  const registerform = document.querySelector('#registerform');
  const registeremail = document.querySelector('#reemailtext');
  const registerpass = document.querySelector('#repasswordtext');
  const registerName = document.querySelector('#Nametext');
  const registerContact = document.querySelector('#contacttext');

  //profile form submitting
  registerform.addEventListener('submit', (e1) => {
    e1.preventDefault();
    RegisterValidation();
  })




  //Validation fuction profile form
  function RegisterValidation() {

    if (registeremail.value.trim() === '') {
      setError(registeremail, 'Email is Required...');
    } else if (!validateEmail1(registeremail.value.trim())) {
      setError(registeremail, 'Please Enter a Valid Email!!!');
    } else {
      setSuccess(registeremail);
    }

    if (registerpass.value.trim() === '') {
      setError(registerpass, 'Password Required...')
    } else if (registerpass.value.trim().length < 8) {
      setError(registerpass, 'Password must be atleast 8 character!!!')
    } else {
      setSuccess(registerpass)
    }


    if (registerName.value.trim() === '') {
      setError(registerName, 'Name is Required...')
    } else {
      setSuccess(registerName)
    }




    if (registerContact.value.trim() === '') {
      setError(registerContact, 'Contact Number is Required...')
    } else if (registerContact.value.trim().length < 10) {
      setError(registerContact, 'Contact Number must be 10 digits')
    } else if (registerContact.value.trim().length > 10) {
      setError(registerContact, 'Contact Number must be 10 digits')
    } else {
      setSuccess(registerContact);
    }



    // else if(Number.isInteger(registerContact.value)){
    //     setError(registerContact,'Contact Number must be Only Numbers')
    // }

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
  //profile email validation
  const validateEmail1 = (registeremail) => {
    return String(registeremail)
      .toLowerCase()
      .match(
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
