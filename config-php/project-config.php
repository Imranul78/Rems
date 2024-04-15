<?php 
  include '../db-connection.php';
  session_start();
  // echo "<script>alert('here project-config.php');</script>";
  
  // Check if form is submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are set
    if (isset($_POST['projectName']) && isset($_POST['projectLeaderId'])) {
      // Assign form inputs to variables
      $projectName = $_POST['projectName'];
      $projectLeaderId = $_POST['projectLeaderId'];
      
      // Get project manager ID from session
      if (isset($_SESSION['userID'])) {
        $projectManager = $_SESSION['userID'];

        // Prepare and execute SQL query
        $query = "INSERT INTO PROJECT (projectName, projectManager, s_userID) 
                  VALUES ('$projectName', $projectManager, $projectLeaderId)";
        $result = mysqli_query($con, $query);

        // Check if query executed successfully
        if ($result) {
          // Redirect to project page after successful insertion
          header('Location: ../project.php');
          exit(); // Terminate script execution after redirection
        } else {
          // Print MySQL error if query failed
          echo "Error: " . mysqli_error($con);
        }
      } else {
        echo "Error: Project manager ID not set in session.";
      }
    } else {
      echo "Error: Required form fields not set.";
    }
  }
?>
