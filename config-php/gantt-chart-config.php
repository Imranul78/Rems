<?php
// Include your database connection file
include 'db-connection.php';

$projectLeader = $_SESSION['userID'];
// Fetch data from the database
$query = "SELECT taskName, T.startDate, T.endDate
          FROM TASK T, PROJECT P, MILESTONE M
          WHERE P.projectID = M.projectID 
          AND P.s_userID = $projectLeader 
          AND T.completionStatus =false
          AND M.milestoneNum = T.milestoneNum";

$result = mysqli_query($con, $query);

// Create an array to store tasks data
$tasks = array();

// Loop through the result set and add tasks to the array
while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = array(
        'id' => uniqid(), //  generate unique IDs for tasks
        'text' => $row['taskName'],
        'start_date' => $row['startDate'],
        'end_date' => $row['endDate']
    );
}

// Close the database connection
mysqli_close($con);


// Encode tasks data to JSON format
$tasks_json = json_encode($tasks);
?>