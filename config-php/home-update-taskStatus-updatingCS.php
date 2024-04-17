<?php
// update-task-status.php

include '../db-connection.php';

// Check if the form is submitted and 'taskName' key is set in $_POST array
if(isset($_POST['submit']) && isset($_POST['taskName'])) {
    // Get the taskName and milestoneNum from the form submission
    $taskName = $_POST['taskName'];
    $milestoneNum = $_POST['milestoneNum'];

    // Update the completion status in the database
    $sql = "UPDATE TASK SET completionStatus = true WHERE taskName = '$taskName' AND milestoneNum = $milestoneNum";
    if(mysqli_query($con, $sql)) {
        echo "<script>alert('Task completion status changed successfully!')</script>";
        // Redirect to prevent form resubmission
        header("Location:../home.php");
        exit; // Stop executing the script after redirect
    } else {
        echo "<script>alert('Task completion status was unsuccessfully!')</script>";
        header("Location:../home.php");
    }
}
?>
