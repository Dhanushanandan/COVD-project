<?php
include ("dbcon.php");




//register

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Web/phpmailer/src/Exception.php';
require '../Web/phpmailer/src/PHPMailer.php';
require '../Web/phpmailer/src/SMTP.php';



function sendemail_verify($email, $verify_token)
{
    // require '../web/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer(true);

    // $mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'covd476@gmail.com';                 // SMTP username
    $mail->Password = 'xnndbhuugimxyxrk';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                   // TCP port to connect to



    $mail->setFrom('covd476@gmail.com', 'COVD');
    $mail->addAddress($email);     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    // $mail->addAttachment('Emailverify.jpeg');    //Optional name

    $mail->Subject = 'E-mail Verification From COVD';

    // $email_template = "
    // <img style='max: width 150px; padding:20px' src='Emailverify.jpeg' alt='image'>
    // <h1><b>Verify Your Email Address</b></h1>
    // <h3>You've entered $email as the email address for your account.
    // Please verify this email address by click below link</h3>
    // <a href='http://localhost/web1/web/verify-email.php?token=$verify_token'>Click HERE.....</a>;
    // ";



    $email_template = "
    <body style='margin: 0; padding: 0;border: 0;'>
    <div class='main'>
        <div class='contain' style='display: grid;justify-content: center; padding: 10vh;'>
            <div id='pagebody'><img src=''></div>
            <div style='font-size: 2vw; text-align: center;'><h1><b>Verify Your Email Address...</b></h1></div>
            <div style='font-size: 1.5vw; text-align: center'><p><h3>You've entered <b>$email</b> as the email address for your account</h3></p></div>
            <div style='font-size: 1.5vw; text-align: center '><h3><p>Please Verify this email address by click below</p></h3></div>
            <div><a href='http://localhost/web1/web/verify-email.php?token=$verify_token'' style='font-size: 2vw; margin-left: 40%;'><b>Click Here.....</b></a></div>
        </div>
        
    </div>
    </body>
    ";

    // $mail->addEmbeddedImage(dirname(__FILE__).'/Image/Emailverify.jpeg','Email Verify');






    $mail->Body = $email_template;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // $mail->send();

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '<script> 
        window.location.href ="index.html";
        alert("Message has been sent");
   </script>';
    }
}






if (isset($_POST["registerbutton"])) {

    //geting the input values using post method and store in a varibles
    $email = $_POST['reemailtext'];
    $name1 = $_POST['Nametext'];
    $password = $_POST['repasswordtext'];
    $contact = $_POST['contacttext'];
    $verify_token = md5(rand());
    $status = 0;
    $user = "user";


    //check the email already exist

    $checkmail = "SELECT * from Customer_details where email='$email'";
    //Execute query
    $result1 = mysqli_query($con, $checkmail);

    //checking the match
    if (mysqli_num_rows($result1) > 0) {

        echo '<script> 
        window.location.href ="index.html";
        alert("Email already taken try new");
   </script>';

    } else {
        //creating the insert query
        $sql = "INSERT INTO Customer_details(email,name,pass,contact,status,token,user) values('$email','$name1','$password','$contact','$status','$verify_token','$user')";

        //checking the values added or not in database
        if (mysqli_query($con, $sql)) {
            sendemail_verify("$email", "$verify_token");
            echo '<script> 
                 window.location.href ="index.html";
                 alert("Successfully ADDED...Verify Your Email..");
             </script>';
        } else {
            echo "Registration failed..Try again!!!" . $sql . "<br>" . mysqli_error($con);
        }
    }

    mysqli_close($con);
}







//login

if (isset($_POST["loginbutton"])) {
    //start session to sent the email to other functions
    session_start();

    //geting the input values using post method and store in a varibles
    $email = $_POST['emailtext'];
    $password = $_POST['passwordtext'];
    $user = "admin";
    //save the email to the session
    $_SESSION["loginemail"] = $email;
    //query

    $sql1 = "SELECT * from Customer_details Where email='$email' AND pass='$password'";

    //Execute query
    $result = mysqli_query($con, $sql1);

    //checking the match
    if (mysqli_num_rows($result) > 0) {
        $sql2 = "SELECT * from Customer_details Where email='$email' AND pass='$password' AND status=1";
        $result2 = mysqli_query($con, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            //check for admin account
            $sql3 = "SELECT * from Customer_details Where email='$email' AND pass='$password' AND status=1 AND user='$user'";
            $result3 = mysqli_query($con, $sql3);
            if (mysqli_num_rows($result3) > 0) {
                echo '<script>
                         window.location.href ="Admindash.html";
                        alert("Successfully Login");
                    </script>';
                // header("Location:Admindash.html");
            } else {
                // header("Location:customerdash.html");
                echo '<script>
                          window.location.href ="customerdash.html";
                        alert("Successfully Login");
                    </script>';
            }
        } else {
            echo '
             <script> 
                   window.location.href ="index.html";
                   alert("Please activate your Account");
             </script>';
        }

    } else {
        echo '
       <script> 
            window.location.href ="indexlogin.php";
            alert("Login Failed:Incorrect User Name OR Password");
       </script>';
    }

    mysqli_close($con);
}


?>