<?php
include ("dbcon.php");
if (isset($_POST['add'])) {
    //get the inputs
    $paymentid = $_POST['paymentid'];
    $mail = $_POST['mail'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];

    //query to check the design id
    $ssql = "SELECT * FROM payment WHERE paymentid='$paymentid'";
    //query to check the user in details
    $csql = "SELECT * FROM Customer_details WHERE email='$mail' AND status=1";

    $cresult = mysqli_query($con, $csql);
    if (mysqli_num_rows($cresult) > 0) {
        $result = mysqli_query($con, $ssql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Payment ID Already Taken');</script>";
        } else {
            $sql = "INSERT INTO payment (paymentid,amount,email,status) VALUES ('$paymentid','$amount','$mail','$status')";

            mysqli_query($con, $sql);
            echo "<script> alert('Payment Added complete');</script>";

        }
    } else {
        echo "<script> alert('Invalid user email NOt Found');</script>";
    }


}


if (isset($_POST['Update'])) {

    $paymentid = $_POST['paymentid'];
    $mail = $_POST['mail'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];

    $ssql = "SELECT * FROM payment WHERE paymentid='$paymentid'";
    $csql = "SELECT * FROM Customer_details WHERE email='$mail' AND status=1";

    $cresult = mysqli_query($con, $csql);
    if (mysqli_num_rows($cresult) > 0) {
        $result = mysqli_query($con, $ssql);
        if (mysqli_num_rows($result) > 0) {

            $sql = "UPDATE payment SET email='$mail',amount='$amount',status='$status' WHERE paymentid='$paymentid'";

            mysqli_query($con, $sql);
            echo "<script> alert('Update complete');</script>";

        } else {

            echo "<script> alert('Payment ID Not Found');</script>";

        }
    } else {
        echo "<script> alert('Invalid user email Not Found');</script>";
    }

}



if (isset($_POST['Delete'])) {

    $paymentid = $_POST['paymentid'];

    $ssql = "SELECT * FROM payment WHERE paymentid='$paymentid'";

    $result = mysqli_query($con, $ssql);
    if (mysqli_num_rows($result) > 0) {
        //delete from the database

        $sql = "DELETE FROM payment WHERE paymentid='$paymentid'";

        mysqli_query($con, $sql);
        echo "<script> alert('Delete complete');</script>";

    } else {

        echo "<script> alert('Payment ID Not Found');</script>";

    }

}


if (isset($_POST['View'])) {
    header("Refresh:0");
}

?>

















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminpayment.css" />
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
                            <td>Payment ID</td>
                            <td>Payment Ammount</td>
                            <td>User Email</td>
                            <td>Payment Status</td>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        if (isset($_POST["searchbtn"])) {
                            $searchtext = $_POST['searchtext'];
                            $ssql = "SELECT * FROM payment WHERE paymentid='$searchtext' OR email='$searchtext'";
                            $result = mysqli_query($con, $ssql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["paymentid"]; ?></td>
                                        <td><?php echo $row["amount"] ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["status"]; ?></td>
                                    </tr>
                                    <?php
                                }

                            } else {
                                ?>
                                <tr>

                                    <td colspan="4">
                                        NO Records found...
                                    </td>

                                </tr>
                                <?php
                            }
                        } else {
                            $rows = mysqli_query($con, "SELECT * FROM payment"); ?>
                            <?php foreach ($rows as $row): ?>
                                <tr>
                                    <td><?php echo $row["paymentid"]; ?></td>
                                    <td><?php echo $row["amount"] ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                </tr>
                            <?php endforeach;
                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <form action="" method="POST" name="payform" id="payform">
                <div class="error"></div>
                <input type="text" placeholder="Payment ID" class="intext" id="paymentid" name="paymentid">
                <!-- <div class="error"></div> -->
                <input type="text" placeholder="Payment Amount" class="intext" id="amount" name="amount">
                <!-- <div class="error"></div> -->
                <input type="text" placeholder="User Email" class="intext" id="mail" name="mail">
                <!-- <div class="error"></div> -->
                <input type="text" placeholder="Payment Status" class="intext" id="status" name="status">
                <!-- <div class="error"></div> -->
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
    <script src="adminpayment.js"></script>
</body>

</html>