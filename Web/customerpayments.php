<?php
include ("dbcon.php");


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
    <link rel="stylesheet" href="customerpayments.css" />
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
                            <td>Payment Status</td>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        session_start();
                        $loginEmail = isset($_SESSION['loginemail']) ? $_SESSION['loginemail'] : '';
                        if (isset($_POST["searchbtn"])) {
                            $searchtext = $_POST['searchtext'];
                            $ssql = "SELECT * FROM payment WHERE paymentid='$searchtext' AND email='$loginEmail'";
                            $result = mysqli_query($con, $ssql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["paymentid"]; ?></td>
                                        <td><?php echo $row["amount"] ?></td>
                                        <td><?php echo $row["status"]; ?></td>
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
                            $rows = mysqli_query($con, "SELECT * FROM payment WHERE email='$loginEmail'"); ?>
                            <?php foreach ($rows as $row): ?>
                                <tr>
                                    <td><?php echo $row["paymentid"]; ?></td>
                                    <td><?php echo $row["amount"] ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                </tr>
                            <?php endforeach;
                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <form action="" method="POST" name="payform" id="payform">
                <div class="buttons">
                    <button type="submit" id="View" name="View">View</button>
                </div>
            </form>
        </div>
    </div>


    <footer></footer>
    <script src="adminpayment.js"></script>
</body>

</html>