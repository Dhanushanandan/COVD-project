<?php
include ("dbcon.php");

if (isset($_POST['add'])) {
    //get the inputs
    $designid = $_POST['designid'];
    $mail = $_POST['mail'];
    $status = 1;

    //query to check the design id
    $ssql = "SELECT * FROM design WHERE Design_id='$designid'";
    //query to check the user in details
    $csql = "SELECT * FROM Customer_details WHERE email='$mail' AND status='$status'";

    $cresult = mysqli_query($con, $csql);
    if (mysqli_num_rows($cresult) > 0) {
        $result = mysqli_query($con, $ssql);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Design ID Already Taken');</script>";
        } else {

            $image = $_FILES['file']['name'];
            $imagesize = $_FILES['file']['size'];
            //temporary name for the image to store
            $image_tmp_name = $_FILES['file']['tmp_name'];

            $validImageExtention = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $image);
            //add extention in the last of the image name
            $imageExtension = strtolower(end($imageExtension));

            //check the extention valid
            if (!in_array($imageExtension, $validImageExtention)) {
                echo "<script> alert('Invalid image extention');</script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($image_tmp_name, '../Web/Image/' . $newImageName);
                $sql = "INSERT INTO design (Design_id,User_email,Design) VALUES ('$designid','$mail','$newImageName')";

                mysqli_query($con, $sql);
                echo "<script> alert('Added complete');</script>";
            }


        }
    } else {
        echo "<script> alert('Invalid user email NOt Found');</script>";
    }


}




if (isset($_POST['Update'])) {

    $designid = $_POST['designid'];
    $mail = $_POST['mail'];
    $status = 1;

    $ssql = "SELECT * FROM design WHERE Design_id='$designid'";
    $csql = "SELECT * FROM Customer_details WHERE email='$mail' AND status='$status'";

    $cresult = mysqli_query($con, $csql);
    if (mysqli_num_rows($cresult) > 0) {
        $result = mysqli_query($con, $ssql);
        if (mysqli_num_rows($result) > 0) {


            $image = $_FILES['file']['name'];
            $imagesize = $_FILES['file']['size'];
            $image_tmp_name = $_FILES['file']['tmp_name'];

            $validImageExtention = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $image);
            $imageExtension = strtolower(end($imageExtension));

            if (!in_array($imageExtension, $validImageExtention)) {
                echo "<script> alert('Invalid image extention');</script>";
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($image_tmp_name, '../Web/Image/' . $newImageName);
                $sql = "UPDATE design SET User_email='$mail',Design='$newImageName' WHERE Design_id='$designid'";

                mysqli_query($con, $sql);
                echo "<script> alert('Update complete');</script>";
            }
        } else {

            echo "<script> alert('Design ID Not Found');</script>";

        }
    } else {
        echo "<script> alert('Invalid user email NOt Found');</script>";
    }

}




if (isset($_POST['Delete'])) {

    $designid = $_POST['designid'];

    $ssql = "SELECT * FROM design WHERE Design_id='$designid'";

    $result = mysqli_query($con, $ssql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $filename = $row['Design'];

        }
        //delete from folder
        $file_path = '../Web/Image/' . $filename;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        //delete from the database

        $sql = "DELETE FROM design WHERE Design_id='$designid'";

        mysqli_query($con, $sql);
        echo "<script> alert('Delete complete');</script>";

    } else {

        echo "<script> alert('Design ID Not Found');</script>";

    }

}


if (isset($_POST['View'])) {
    header("Refresh:0");
}


?>
















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COVD</title>
    <link rel="stylesheet" href="admindesign.css" />
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
                    <button id="searchbtn" class="searchbox" type="submit" name="searchbtn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <div class="error"></div>
                </div>
            </form>

            <div class="table">
                <table id="dtable">
                    <thead>
                        <tr id="desgin">
                            <td>Design ID</td>
                            <td>User Email</td>
                            <td>Design</td>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        if (isset($_POST["searchbtn"])) {
                            $searchtext = $_POST['searchtext'];
                            $ssql = "SELECT * FROM Design WHERE Design_id='$searchtext' OR User_email='$searchtext'";
                            $result = mysqli_query($con, $ssql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["Design_id"]; ?></td>
                                        <td><?php echo $row["User_email"]; ?></td>
                                        <td><img src="Image/<?php echo $row["Design"]; ?>" alt="cannot load" width=200
                                                onclick="divview('<?php echo $row['Design']; ?>')" class="divimage"></td>

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
                            $rows = mysqli_query($con, "SELECT * FROM design"); ?>
                            <?php foreach ($rows as $row): ?>
                                <tr>
                                    <td><?php echo $row["Design_id"]; ?></td>
                                    <td><?php echo $row["User_email"]; ?></td>
                                    <td><img src="Image/<?php echo $row["Design"]; ?>" alt="cannot load" width=200
                                            onclick="divview('<?php echo $row['Design']; ?>')" class="divimage" id="divimage">
                                    </td>
                                </tr>
                            <?php endforeach;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="vimg">
            <div class="img" name="img" id="img"></div>

            <form action="" method="POST" name="designform" id="designform" enctype="multipart/form-data">
                <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png">
                <div class="error"></div>
                <input type="text" placeholder="User Email" class="intext" id="mail" name="mail">
                <div class="error"></div>
                <input type="text" placeholder="Design ID" class="intext" id="designid" name="designid">
                <div class="error"></div>
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
    <script src="admindesign.js"></script>


</body>

</html>