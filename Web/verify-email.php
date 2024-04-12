<?php
include ("dbcon.php");

if (isset($_GET["token"])) {
    //get token from the link
    $token = $_GET["token"];

    //select the token same in the table
    $query = "SELECT token From Customer_details where token='$token'";
    //executing query
    $result = mysqli_query($con, $query);
    //check the result
    if (mysqli_num_rows($result) > 0) {
        //update the status fiel to activate the account
        $query1 = "UPDATE Customer_details SET status=1 Where token='$token'";
        mysqli_query($con, $query1);
        echo "Verification Success";
    } else {
        echo "verification failed";
    }
} else {
    echo "NOT allowed";
}



?>