<?php
include ("dbcon.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Web/phpmailer/src/Exception.php';
require '../Web/phpmailer/src/PHPMailer.php';
require '../Web/phpmailer/src/SMTP.php';




if (isset($_POST['Update'])) {

    //get the inputs
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $contact = $_POST['contact'];

    $csql = "SELECT * FROM Customer_details WHERE email='$mail' AND status=1 AND user='user'";

    $cresult = mysqli_query($con, $csql);
    if (mysqli_num_rows($cresult) > 0) {
        $result = mysqli_query($con, $csql);
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE Customer_details SET name='$name', pass='$pass', contact='$contact' Where email='$mail'";

            if (mysqli_query($con, $sql)) {
                echo '
                <script> 
                     alert("Successfully Updated...");
                </script>';
            } else {
                echo '
                <script> 
                     alert("Update failed..Try again!!!");
                </script>';
            }
        } else {

            echo "<script> alert('Customer Not Found');</script>";

        }
    } else {
        echo "<script> alert('Invalid user email NOt Found');</script>";
    }

}


if (isset($_POST['View'])) {
    header("Refresh:0");
}



if (isset($_POST['Delete'])) {

    $mail = $_POST['mail'];

    $ssql = "SELECT * FROM Customer_details WHERE email='$mail' AND status=1 AND user='user'";

    $result = mysqli_query($con, $ssql);
    if (mysqli_num_rows($result) > 0) {

        $sql = "DELETE FROM Customer_details WHERE email='$mail'";

        mysqli_query($con, $sql);
        echo "<script> alert('Delete complete');</script>";

    } else {

        echo "<script> alert('Customer Email Not Found');</script>";

    }

}

if (isset($_POST['add'])) {



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
            echo 'Verify Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo '<script> 
        alert("Verify Message has been sent to your email.");
   </script>';
        }
    }
















    //geting the input values using post method and store in a varibles
    $email = $_POST['mail'];
    $name1 = $_POST['name'];
    $password = $_POST['pass'];
    $contact = $_POST['contact'];
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
        alert("Email already taken try new");
        </script>';

    }else {
        //creating the insert query
        $sql = "INSERT INTO Customer_details(email,name,pass,contact,status,token,user) values('$email','$name1','$password','$contact','$status','$verify_token','$user')";

        //checking the values added or not in database
        if (mysqli_query($con, $sql)) {
            sendemail_verify("$email", "$verify_token");
            echo '<script> 
                 alert("Successfully ADDED...Verify Your Email..");
             </script>';
        } else {
            echo "Registration failed..Try again!!!" . $sql . "<br>" . mysqli_error($con);
        }
    }



}


?>
















































<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admincustomer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <div id="clogo" class="clogo"></div>
            <div id="companyname">COVD</div>
            <div id="res">
                <i class="fa-solid fa-phone"></i> For Reservation:0771326639
            </div>
        </div>
    </header>

    <div class="main">
        <div class="tablecontainer">

            <form action="" method="POST" id="searchform" name="searchform">

                <div class="search">
                    <input type="search" id="searchtext" class="searchbox" placeholder="Search Here...."
                        name="searchtext">
                    <div class="error"></div>
                    <button id="searchbtn" class="searchbox" type="submit" name="searchbtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>

            </form>

            <div class="table">
                <table>
                    <thead>
                        <tr id="desgin">
                            <td>User Email</td>
                            <td>Name</td>
                            <td>Contact No</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($_POST["searchbtn"])) {
                            $searchtext = $_POST['searchtext'];
                            $ssql = "SELECT email,name,contact FROM Customer_details WHERE email='$searchtext' OR name='$searchtext' AND status=1 AND user='user'";
                            $result = mysqli_query($con, $ssql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["contact"]; ?></td>
                                    </tr>
                                    <?php
                                }

                            } else {
                                ?>
                                <tr>

                                    <td colspan="3">
                                        NO Records found...
                                    </td>

                                </tr>
                                <?php
                            }
                        } else {
                            $rows = mysqli_query($con, "SELECT email,name,contact FROM Customer_details WHERE status=1 AND user='user'"); ?>
                            <?php foreach ($rows as $row): ?>
                                <tr>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["contact"]; ?></td>
                                </tr>
                            <?php endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <form action="" method="POST" name="cusform" id="cusform">

                <div class="error"></div>
                <input type="text" placeholder="User Email" class="intext" id="mail" name="mail">
                <input type="text" placeholder="User Name" class="intext" id="name" name="name">
                <input type="password" placeholder="User Password" class="intext" id="pass" name="pass">
                <input type="text" placeholder="Contact No" class="intext" id="no" name="contact">
                <div class="buttons">
                    <button type="submit" id="add" name="add">ADD</button>
                    <button type="submit" id="Update" name="Update">Update</button>
                    <button type="submit" id="Delete" name="Delete">Delete</button>
                    <button type="submit" id="View" name="View">View</button>
                </div>

            </form>
        </div>
    </div>


    <footer></footer>
    <script src="admincustomervalid.js"></script>
</body>

</html>