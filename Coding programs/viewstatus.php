<?php
session_start();
include './UserHeader.php';
require './DBProperties.php';
$userid = $_SESSION['userid'];
if ($con) {
    $qry = "SELECT * FROM `complaint` where email='$userid' ORDER BY `complaint`.`sno` DESC LIMIT 1";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $status = $row['status'];
}
?>
<body>
    <div style="margin-top: 15%;">
        <?php
        if ($status == "Pending") {
            ?>

            <div>
                <h1 style="color: blue;text-align: center;margin-top: 5%;">Dear <?php echo $name; ?> Your Complaint is in <?php echo $status; ?></h1>
            </div>
            <?php
        } else if ($status == "Accepted") {
            ?>
            <div>
                <h1 style="color: green;text-align: center;margin-top: 5%;">Dear <?php echo $name; ?> Your Complaint is <?php echo $status; ?></h1>
            </div>
            <?php
        } else if ($status == "Rejected") {
            ?>

            <div>
                <h1 style="color: red;text-align: center;margin-top: 5%;">Dear <?php echo $name; ?> Your Complaint is <?php echo $status; ?></h1>
                <h3 style="text-align: center;">Please visit nearest Police station for more Details</h3>
            </div>
            <?php
        } else {
            ?>
            <div>
                <h1 style="color: black;text-align: center;margin-top: 5%;">No Complaints Found</h1>

            </div>
            <?php
        }
        ?>
    </div>
</body>