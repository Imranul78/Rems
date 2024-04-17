<?php
// display-tasks.php

include 'db-connection.php';

// Fetch tasks from the database
$projectEmp = $_SESSION['userID'];
$sql = "SELECT P.projectID,P.projectName,P.s_userID,M.milestoneNum,taskName
FROM PROJECT P ,MILESTONE M , TASK T
WHERE P.projectID=M.projectID AND 
P.s_userID = $projectEmp AND
M.milestoneNum = T.milestoneNum AND 
T.completionStatus = false;";
$result = mysqli_query($con, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output a form for each task
    echo "<form method='post' action='config-php/home-update-taskStatus-updatingCS.php'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["projectID"] . "</td>";
        echo "<td>" . $row["projectName"] . "</td>";
        echo "<td>" . $row["milestoneNum"] . "</td>";
        echo "<td>" . $row["taskName"] . "</td>";
        echo "<td>" . $row["s_userID"] . "</td>";
        echo "<td>
        <button type='submit' name='submit' class='create-button'>Complete?</button>
        <input type='hidden' name='taskName' value='" . $row["taskName"] . "'>
        <input type='hidden' name='milestoneNum' value='" . $row["milestoneNum"] . "'>
        </td>";
        echo "</tr>";
    }
    echo "</form>";
} else {
    echo "<tr><td colspan='6'>No data found</td></tr>";
}
?>
