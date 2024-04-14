<?php
include ("dbcon.php");
//update profile
if (isset($_POST['up-btn'])) {
  //start session to accept the login email
  session_start();
  $uemail = $_POST['uemail'];
  $uname = $_POST['uname'];
  $upass = $_POST['upass'];
  $ucontact = $_POST['ucontact'];
  //retrive the login email
  $loginEmail = isset($_SESSION['loginemail']) ? $_SESSION['loginemail'] : '';


  $usql = "UPDATE Customer_details SET name='$uname', pass='$upass', contact='$ucontact' Where email='$uemail'";


  // $checkmail = "SELECT * from Customer_details where email='$uemail'";
  // //Execute query
  // $result1 = mysqli_query($con, $checkmail);

  //checking the match
  if ($uemail === $loginEmail) {
    //checking the values added or not in database
    if (mysqli_query($con, $usql)) {
      echo '
     <script> 
          window.location.href ="customerdash.html";
          alert("Successfully Updated...");
     </script>';
    } else {
      echo '
     <script> 
                window.location.href ="customerdash.html";
          alert("Update failed..Try again!!!");
     </script>';
    }

  } else {
    echo '<script> 
    window.location.href ="customerdash.html";
      alert("Invalid Email.Email cannot be Change.Try again!!!");
 </script>';
  }

  mysqli_close($con);
}


?>























<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COVD-Customer Home</title>
  <!-- External style sheet link -->
  <link rel="stylesheet" href="customerprofile.css" />
  <!-- Icons link import -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

  <header class="header">
    <div class="logo">
      <div id="clogo" class="clogo"></div>
      <div id="companyname">COVD</div>
      <div id="res">
        <i class="fa-solid fa-phone"></i>
        For Reservation:0771326639
      </div>
    </div>
  </header>




  

  <div class="main">
    <!-- Register Form -->
    <form action="" class="registerform" name="registerform" id="registerform" method="POST">
      <!-- <div><label for="show" id="closebtn" class="closebtn" title="close"><i class="fa fa-times" aria-hidden="true"></i></label></div> -->
      <!-- <div><label for="show1" id="closebtn1" class="closebtn1" title="close1" onclick="close1()"><i class="fa fa-times" aria-hidden="true"></i></label></div> -->

      <div id="registercontainer">
        <h1>Profile</h1>
        <?php
        session_start();
        $loginEmail = isset($_SESSION['loginemail']) ? $_SESSION['loginemail'] : '';
        $sql = "SELECT * FROM Customer_details WHERE email='$loginEmail'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
          foreach($result as $row) {
        }
        ?>
        <div id="regemailcontainer" class="regemailcontainer">
          <label for="" id="reemaillabel" class="registerlabel"><i class="fa-solid fa-envelope"></i>Email</label>
          <input type="text" id="reemailtext" class="regtextbox" name="uemail" value="<?php echo $row['email'] ?>">
          <div class="error"></div>
        </div>
        <div id="Namecontainer" class="Namecontainer">
          <label for="" id="Namelabel" class="registerlabel"><i class="fa-solid fa-user"></i>User Name</label>
          <input type="text" id="Nametext" class="regtextbox" name="uname" value="<?php echo $row['name'] ?>">
          <div class="error"></div>
        </div>
        <div id="repasswordcontainer" class="repasswordcontainer">
          <label for="" id="repasswordlabel" class="registerlabel"><i class="fa-solid fa-lock"></i>Passsword</label>
          <input type="password" id="repasswordtext" class="regtextbox" name="upass" value="<?php echo $row['pass'] ?>">
          <div class="error"></div>
        </div>
        <div id="contactcontainer" class="contactcontainer">
          <label for="" id="contactlabel" class="registerlabel"><i class="fa-solid fa-mobile-screen"></i>Contact
            number</label>
          <input type="text" id="contacttext" class="regtextbox" name="ucontact" value="<?php echo $row['contact'] ?>">
          <div class="error"></div>
        </div>
        <button id="registerbutton" type="submit" name="up-btn">Update</button>
        <?php } ?>
      </div>
    </form>
  </div>





  <footer>
    <div class="foot"></div>
  </footer>

  <!-- validation -->
  <script>
    //get the id in profile form

    const registerform = document.querySelector('#registerform');
    const registeremail = document.querySelector('#reemailtext');
    const registerpass = document.querySelector('#repasswordtext');
    const registerName = document.querySelector('#Nametext');
    const registerContact = document.querySelector('#contacttext');
    let success=true;

    //profile form submitting
    registerform.addEventListener('submit', (e1) => {
      
      if(!RegisterValidation()){
        e1.preventDefault();
      }
    })




    //Validation fuction profile form
    function RegisterValidation() {
        let success=true;

      if (registeremail.value.trim() === '') {
        success=false;
        setError(registeremail, 'Email is Required...');
      } else if (!validateEmail1(registeremail.value.trim())) {
        success=false;
        setError(registeremail, 'Please Enter a Valid Email!!!');
      } else {
        setSuccess(registeremail);
      }

      if (registerpass.value.trim() === '') {
        success=false;
        setError(registerpass, 'Password Required...')
      } else if (registerpass.value.trim().length < 8) {
        success=false;
        setError(registerpass, 'Password must be atleast 8 character!!!')
      } else {
        setSuccess(registerpass)
      }


      if (registerName.value.trim() === '') {
        success=false;
        setError(registerName, 'Name is Required...')
      } else {
        setSuccess(registerName)
      }




      if (registerContact.value.trim() === '') {
        success=false;
        setError(registerContact, 'Contact Number is Required...')
      } else if (registerContact.value.trim().length < 10) {
        success=false;
        setError(registerContact, 'Contact Number must be 10 digits')
      } else if (registerContact.value.trim().length > 10) {
        success=false;
        setError(registerContact, 'Contact Number must be 10 digits')
      } else {
        setSuccess(registerContact);
      }



      // else if(Number.isInteger(registerContact.value)){
      //     setError(registerContact,'Contact Number must be Only Numbers')
      // }

        return success;
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


  </script>
</body>

</html>