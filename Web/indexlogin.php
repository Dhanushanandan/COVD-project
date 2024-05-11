<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title logo -->
  <link rel="icon" href="Image/company logo.png">
  <title>COVD Login</title>
    <!-- Icons link import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>


<style>
    :root{
    --whitesmoke:whitesmoke;
    --white:white;
    --black:black;
    --yellow:#FFC54D;
    --green:#53BF9D;
    --red:crimson;
    --gradiant:linear-gradient(to right,rgb(0, 0, 0),rgb(53, 51, 51));
    --gradiant1:linear-gradient(to right,rgb(105, 104, 104),rgb(53, 51, 51));
}

    body{
        margin: 0;
        padding: 0;
        border: 0;
        height: 100vh;
        width: 100%;
        background-image: linear-gradient(rgba(0,0,0,.7),rgba(7, 7, 7, 0.2)),url("Image/CSOTY_Header.png");
        /* background: url("Image/CSOTY_Header.png"), rgba(0, 0, 0, 0); */
        /* background-color: black; */
        background-size: cover;
        background-position: center;
        overflow-y: hidden;
    }
    #main{
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #contain{
        
        height: 70%;
        width: 30vw;
        color:white;
        font-weight: border;
        border-radius: 40px;
        /* border: var(--whitesmoke) solid 2px; */
        transition: .5s;
        background: rgba(255, 255, 255, 0.06);
        box-shadow: var(--white) 0px 0px 10px 5px;
        border-right: rgba(255, 255, 255, 0.6) solid 2px;
        border-left: rgba(255, 255, 255, 0.6) solid 2px;
    }
    #logincontainer h1{
    font-size: 3vw;
    text-align: center;
    margin-top: 30px;
    padding-bottom: 10px;
    border-bottom: 5px solid var(--whitesmoke);
    border-radius: 50%;
}
.data{
    font-size: 1.5vw;
    padding: 20px;
    margin: 20px;
    margin-top: 0;
}
.data i{
    margin-right: 10px;
}
#emailtext,#passwordtext{
    font-size: 1.8vw;
    width: 100%;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid var(--whitesmoke);
    color: var(--white);
    padding-left: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
#emailtext:hover,#passwordtext:hover{  
    border:1px solid aqua;
    border-radius: 50px;
}
.label3{
    float: left;
}
#loginbutton{
    font-size: 2vw;
    width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 2%;
    padding: 10px;
    height: 5vh;
    border: none;
    outline: none;
    background: rgba(255, 255, 255, .06);
    border-radius: 50px;
    color: var(--white);
    /* text-shadow: 3px 3px 5px whitesmoke; */
    box-shadow: 3px 3px 5px rgba(227, 227, 235, 0.37);
    border-left: 1px solid rgb(158, 156, 156);
    border-top: 1px solid rgb(158, 156, 156);
}
#loginbutton:hover{
    box-shadow: 3px 3px 5px rgba(8, 162, 224, 0.37);
    border-left: 1px solid rgb(64, 198, 236);
    border-top: 1px solid rgb(8, 162, 224);
}
#registerlabel{
    text-align: center;
    margin-top: 40px;
    font-size: 1vw;
}
#registerspan{
    padding-left: 5px;
    cursor: pointer;
}
/* Register  */




#registercontainer h1{
    font-size: 3vw;
    text-align: center;
    /* margin-top: 30px; */
    padding: 40px;
    border-bottom: 5px solid var(--whitesmoke);
    border-radius: 50%;
    margin-top: 0;
}
#registercontainer i{
    margin-right: 10px;
}

#registerbutton{
    font-size: 2vw;
    width: 90%;
    margin-left: 5%;
    margin-right: 10%;
    margin-top: 2%;
    padding: 10px;
    height: 5vh;
    border: none;
    outline: none;
    background: rgba(255, 255, 255, .06);
    border-radius: 50px;
    color: var(--white);
    /* text-shadow: 3px 3px 5px whitesmoke; */
    box-shadow: 3px 3px 5px rgba(227, 227, 235, 0.37);
    border-left: 1px solid rgb(158, 156, 156);
    border-top: 1px solid rgb(158, 156, 156);
    
}
#registerbutton:hover{
    box-shadow: 3px 3px 5px rgba(8, 162, 224, 0.37);
    border-left: 1px solid rgb(64, 198, 236);
    border-top: 1px solid rgb(8, 162, 224);
}
.regtextbox{
    font-size: 1.8vw;
    width: 90%;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid var(--whitesmoke);
    color: var(--white);
    margin-bottom: 0vh;
    margin-right:20px;
    margin-left: 30px;
    padding-left: 10px;
}

#registercontainer{
    margin: 10px;
}

.registerlabel{
    font-size: 1.5vw;
    float: left;
    margin-left: 40px;
}

.regtextbox:hover{  
    border:1px solid aqua;
    border-radius: 50px;
}
.registerform{
    display: none;
}

#loginlabel2{
    text-align: center;
    margin-top: 15px;
    font-size: 1.5vw;
    padding-left: 5px;
    cursor: pointer;
}

/* profile validation css js*/
 .error{
    color: red;
    font-size: 1.5vw;
    font-weight: bolder;
    text-align: center;
    /* padding: 10px; */
}


/* Media queries for mobile devices */
@media screen and (max-width: 767px) {
    #contain {
        width: 80%;
        height: 75%;
    }
    #logincontainer h1,
    #registercontainer h1 {
        font-size: 6vw;
    }
    .data {
        font-size: 3vw;
        padding: 3vw;
        margin: 3vw;
    }
    #emailtext,
    #passwordtext,
    #reemailtext,
    #Nametext,
    #repasswordtext,
    #contacttext {
        font-size: 4vw;
        padding: 4vw;
        width: 90%;
    }
    #loginbutton,
    #registerbutton {
        font-size: 5vw;
        width: 70%;
        padding: 2vw;
        margin-left: 15vw;
    }
    #registerlabel,
    #loginlabel2{
        font-size: 4vw;
        margin-top: 6vw;
    }
    .error{
        font-size: 15px;
    }
    .registerlabel {
        font-size: 3vw;
    }
    #reemailtext,#Nametext,#repasswordtext,#contacttext{
        width: 80%;
    }
    
}



    
</style>

    

<body>
    <!-- Login form -->
    <div id="main" class="main">
        <!-- <label for="show" class="show-btn" id="loginbtn"><i class="fa-regular fa-circle-user"></i>login</label> -->
        <div class="contain" id="contain">
            <form action="register.php" class="f" name="Home" id="Home" method="POST">
                <!-- <div><label for="" id="closebtn" class="closebtn" title="close"><i class="fa fa-times"
                            aria-hidden="true"></i></label></div> -->
                <div id="logincontainer">
                    <h1>Login</h1>
                    <div id="emailcontainer" class="data">
                        <label for="" id="emaillabel" class="label3"><i class="fa-solid fa-envelope"></i>Email</label>
                        <input type="text" id="emailtext" name="emailtext" placeholder="asd@gmail.com">
                        <div class="error" id="error"></div>
                    </div>
                    <div id="passwordcontainer" class="data">
                        <label for="" id="passwordlabel" class="label3"><i
                                class="fa-solid fa-lock"></i>Passsword</label>
                        <input type="password" id="passwordtext" placeholder="********" name="passwordtext">
                        <div class="error"></div>
                    </div>
                    <button id="loginbutton" type="submit" value="submit" name="loginbutton">Login</button>
                    <div id="registerlabel" class="llabel">Don't have an Account?<span id="registerspan"
                            onclick="hide()">Sign
                            up</span></div>
                </div>
            </form>


            <!-- Register Form -->
            <form action="register.php" class="registerform" name="registerform" id="registerform" method="POST">
                <!-- <div><label for="show" id="closebtn" class="closebtn" title="close"><i class="fa fa-times" aria-hidden="true"></i></label></div> -->
                <!-- <div><label for="show1" id="closebtn1" class="closebtn1" title="close1" onclick="close1()"><i class="fa fa-times" aria-hidden="true"></i></label></div> -->

                <div id="registercontainer">
                    <h1>Register</h1>
                    <div id="regemailcontainer" class="regemailcontainer">
                        <label for="" id="reemaillabel" class="registerlabel"><i
                                class="fa-solid fa-envelope"></i>Email</label>
                        <input type="text" id="reemailtext" class="regtextbox" placeholder="asd@gmail.com"
                            name="reemailtext">
                        <div class="error"></div>
                    </div>
                    <div id="Namecontainer" class="Namecontainer">
                        <label for="" id="Namelabel" class="registerlabel"><i class="fa-solid fa-user"></i>User
                            Name</label>
                        <input type="text" id="Nametext" class="regtextbox" placeholder="asd" name="Nametext">
                        <div class="error"></div>
                    </div>
                    <div id="repasswordcontainer" class="repasswordcontainer">
                        <label for="" id="repasswordlabel" class="registerlabel"><i
                                class="fa-solid fa-lock"></i>Passsword</label>
                        <input type="password" id="repasswordtext" class="regtextbox" placeholder="********"
                            name="repasswordtext">
                        <div class="error"></div>
                    </div>
                    <div id="contactcontainer" class="contactcontainer">
                        <label for="" id="contactlabel" class="registerlabel"><i
                                class="fa-solid fa-mobile-screen"></i>Contact
                            number</label>
                        <input type="text" id="contacttext" class="regtextbox" placeholder="07********"
                            name="contacttext">
                        <div class="error"></div>
                    </div>
                    <button id="registerbutton" type="submit" value="submit" name="registerbutton">Register</button>
                </div>
                <div id="loginlabel2">Already have an Account?<span id="loginlabel2" onclick="hide1()">Login</span>
                </div>
            </form>
        </div>
    </div>





    <script>
    var x = document.getElementById('registerform');
    var y = 0;

    var a = document.getElementById('Home');
    var b = 0;

    //  var c=document.getElementById('contain');
    // var d=0;


    function hide() {
      if (y == 1) {
        x.style.display = 'block';
        a.style.display = 'none';
        y = 0;
      } else {
        x.style.display = 'none';
        y = 1;
      }
    }

    function hide1() {
      if (b == 1) {
        a.style.display = 'block';
        x.style.display = 'none';
        b = 0;
      } else {
        a.style.display = 'none';
        b = 1;
      }
    }





    // //textbox exit validate
    // const loginemail = document.querySelector('#emailtext');
    // const loginpass = document.querySelector('#passwordtext');

    // loginemail.addEventListener('blur', function () {
      
    // });
    // loginpass.addEventListener('blur', function () {
    //   alert("User exited");
    // });

  </script>

  <script src="formvalidate.js"></script>

</body>

</html>