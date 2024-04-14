<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Icons link import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
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
html{
    /*scroll the window smoothly to bottom*/
    scroll-behavior: smooth;
}
body{
    min-width: 600px;
    max-width: 100%;
    padding: 0;
    margin: 0;
    border: 0;
    font-family: "Open sans", sans-serif;
    color: var(--black);
    background:var(--gradiant);
    overflow-x:hidden ;
}

/* animation register and login */
@keyframes slidein{
    0%{
        transform: translateX(-50%);
    }50%{
        transform: translateX(0);
    }
}


#Home,#contain{
    animation: slidein 2s;
}
@keyframes slidein1{
    0%{
        transform: translateX(50%);
    }50%{
        transform: translateX(0);
    }
}
#registerform{
    animation: slidein1 2s;
}








/* Login form design */


.contain{
    position: absolute;
    top: 40%;
    left: 30%;
    background:var(--gradiant);
    height: 50vh;
    width: 40vw;
    color:white;
    border-radius: 40px;
    border: var(--whitesmoke) solid 2px;
    transition: .5s;
    box-shadow: var(--whitesmoke) 0px 0px 10px 5px;
    /* z-index: 500; */
}

.show-btn{
    cursor: pointer;
}

#logincontainer h1{
    font-size: 4vw;
    text-align: center;
    margin-top: 20px;
    padding-bottom: 20px;
    border-bottom: 5px solid var(--whitesmoke);
    border-radius: 50%;
}
.data{
    font-size: 2vw;
    padding: 20px;
    margin: 20px;
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
.closebtn i{
    color: var(--white);
    font-size: 40px;
    padding: 10px;
    display: flex;
    justify-content: end;
    margin-top: 10px;
    margin-right: 10px;
}
#registerlabel{
    text-align: center;
    margin-top: 40px;
    font-size: 1.5vw;
}
#registerspan{
    padding-left: 5px;
    cursor: pointer;
}




/* desktop screen size login */
 @media screen and (min-width:830px) {
    .contain{
    position: absolute;
    top: 30%;
    left: 30%;
    background:var(--gradiant);
    height: 80%;
     width: 40vw;
    color:white;
    border-radius: 40px;
    border: var(--whitesmoke) solid 2px;
    transition: .5s;
    box-shadow: var(--whitesmoke) 0px 0px 10px 5px;
    opacity: .9;
    /* z-index: 1000; */
    }
    #nav1{
        width: 100%;
    }
    .logo{
        width: 100%;
    }
} 

/* mobile screen size login */
 @media screen and (max-width:1200px) {
    .contain{
        opacity: .9;
        text-align: center;
        position: absolute;
        top: 45%;
        left: 30%;
        background:var(--gradiant);
        height: 60%;
        width: 40vw;
        color:white;
        border-radius: 40px;
    border: var(--whitesmoke) solid 2px;
    transition: .5s;
    box-shadow: var(--whitesmoke) 0px 0px 10px 5px;
    /* z-index: 1000; */
    }

    #logincontainer h1{
        font-size: 4vw;
        text-align: center;
        margin-top: 50px;
    }

    #loginbutton1{
        font-size: 2vw;
        width: 80%;
        margin-left: 10%;
        margin-right: 5%;
        margin-top: 2%;
        padding: 0px;
        height: 4vh;
    }
    #companyname{
        margin-left: 20px;
        margin-top: 20px;
        font-weight: bolder;
        font-size: 5vw;
        
    }
    
    #nav1{
        width: 100%;
    }
    .logo{
        width: 100%;
    }
} 
























/* Register  */




#registercontainer h1{
    font-size: 4vw;
    text-align: center;
    margin-top: 30px;
    padding: 50px;
    border-bottom: 5px solid var(--whitesmoke);
    border-radius: 50%;
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
    font-size: 1.8vw;
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


/* mobile screen size register */
 @media screen and (max-width:830px) {

    #registercontainer h1{
        font-size: 4vw;
        text-align: center;margin-top: 30px;
        padding: 20px;
    }

    #registerbutton{
        font-size: 2vw;
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 2%;
        padding: 0px;
        height: 4vh;
    }
} 
































/* Image slider animation */
@keyframes changeImage{
    0%{
        background-image: url(Image/technology-in-construction-image-800x445.jpeg.jpg);
    }
    25%{
        background-image: url(Image/628268cc7d20506f6307dab83f843b97.jpg);
    }
    50%{
        background-image: url(Image/195869-nomryjdgor-1699964440.jpg);
    }
    75%{
        background-image: url(Image/628268cc7d20506f6307dab83f843b97.jpg);
    }
    100%{
        background-image: url(Image/technology-in-construction-image-800x445.jpeg.jpg);
    }
}
/* website scroll fade */
@keyframes fade {
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}

/* mobile screen */
@media screen and (max-width: 810px) {
    #tag,.img,#pimg,#price{
        flex: 100%;
        margin-left: 17vw;
        margin-top: 2vh;
        margin-bottom: 10vh;
        animation: fade linear both;
        animation-timeline: view();
        animation-range: entry 50% cover 50%;
        border-radius: 50px;
    }
    #pimg{
        flex: 100%;
        margin-left: 5vw;
        margin-right: 5vw;
        margin-top: 2vh;
        margin-bottom: 5vh;
        animation: fade linear both;
        animation-timeline: view();
        animation-range: entry 75% cover 50%;
        border-radius: 50px;
    }
    #price{
        flex: 100%;
        margin-left: 0px;
        padding-left: 0px;
        margin-right: 20vw;
    }
    #price p{
        padding-left: 0px;
    }
    #loginbutton1{
        margin-right: 50px;
    }
    #body1{
        width: 100%;
    }
    .header{
        width: 100%;
    }
    #nav1{
        width: 100%;
    }
    .logo{
        width: 100%;
    }
}

















/* login validation css js*/
.data .error{
    color: red;
    font-size: 1.5vw;
    margin-top: 5px;
    font-weight: bolder;
    text-align: center;
}

/* .success input{
    border-color: green;
    background: transparent;
}
.data input{
    border-color:2px solid red;
    background: transparent;
} */



/* register validation css js*/
.regemailcontainer .error,.Namecontainer .error,.repasswordcontainer .error,.contactcontainer .error{
    color: red;
    font-size: 1.5vw;
    font-weight: bolder;
    text-align: center;
    padding: 10px;
}

/* .success input{
    border-color: green;
    background: transparent;
}
.regemailcontainer .Namecontainer .repasswordcontainer .contactcontainer input{
    border-color:2px solid red;
    background: transparent;
} */
    </style>



    <!-- Login form -->
    <div id="main">
        <input type="checkbox" id="show">
        <!-- <label for="show" class="show-btn" id="loginbtn"><i class="fa-regular fa-circle-user"></i>login</label> -->
        <div class="contain" id="contain">
            <form action="register.php" class="f" name="Home" id="Home" method="POST">
                <div><label for="show" id="closebtn" class="closebtn" title="close"><i class="fa fa-times"
                            aria-hidden="true"></i></label></div>
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