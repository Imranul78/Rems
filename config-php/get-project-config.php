<?php 
      include '../db-connection.php';
      session_start();
      $projectManager = $_SESSION['userID'];


      $query = "
            SELECT 
            P.projectName,
            P.s_userID,
            SUM(CASE WHEN T.completionStatus = 1 THEN 1 ELSE 0 END) AS completedTasks,
            SUM(CASE WHEN T.completionStatus = 0 THEN 1 ELSE 0 END) AS notCompletedTasks
            FROM 
                PROJECT P
            LEFT JOIN 
                (SELECT projectID, milestoneNum
                FROM MILESTONE
                WHERE projectID IN (SELECT projectID 
                                        FROM PROJECT WHERE projectManager=$projectManager)) AS MILESTONE ON P.projectID = MILESTONE.projectID
            LEFT JOIN 
                TASK T ON MILESTONE.milestoneNum = T.milestoneNum
            WHERE 
                P.projectManager = $projectManager
            GROUP BY 
                P.projectName, P.s_userID; ";
      $result = mysqli_query($con,$query);
      $data = array();
      while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
      }
      // Close the connection
      mysqli_close($con);
      // Send the JSON response
      header('Content-Type: application/json');
      echo json_encode($data);

    ?>