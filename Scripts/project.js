jQuery(document).ready(function () {
  // Show Add Project Modal
  jQuery("#addProjectBtn").click(function () {
    jQuery("#addProjectModal").modal("show");
  });

  // Hide Add Project Modal on Save
  $("#addProjectForm").submit(function (event) {
    event.preventDefault();
    $("#addProjectModal").modal("hide");

    // Serialize form data
    var formData = $(this).serialize();

    // AJAX request to save project details
    $.ajax({
      type: "POST",
      url: "config-php/project-config.php", // Update the URL to point to your PHP file
      data: formData,
      success: function (response) {
        // Optionally, you can handle success response here
        console.log("Project details saved successfully");
        // Reload the page to display the updated project list
        location.reload();
      },
      error: function (xhr, status, error) {
        // Handle errors
        console.error(xhr.responseText);
        // Optionally, display an error message to the user
        alert("Error: Failed to save project details. Please try again.");
      },
    });
  });

  // Ajax request to get project data
  $.ajax({
    url: "../config-php/get-project-config.php",
    dataType: "json",
    success: function (data) {
      // Process the data received from the server
      displayProjects(data);
    },
    error: function (xhr, status, error) {
      // Handle errors
      console.error(xhr.responseText);
    },
  });

  // Function to display project data
  function displayProjects(data) {
    var cardDiv = $("#project-list");
    console.log(data);
    data.forEach((project) => {
      var totalTask =
        parseInt(project.completedTasks) + parseInt(project.notCompletedTasks);

      cardDiv.append(`
          <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
            <div class="card bg-custom">
              <div class="card-body">
                <h5 class="card-title">${project.projectName}</h5>
                <p class="card-text">Project Leader: ${project.s_userID}</p>
                <!-- Add more project details as needed -->
                <canvas id="chart-${project.projectName}" width="200" height="200"></canvas>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color:black">Total Tasks: ${totalTask}</li>
                <li class="list-group-item" style="color:black;background-color:rgb(34, 207, 207)">Completed Tasks: ${project.completedTasks}</li>
                <li class="list-group-item" style="color:black;background-color:rgb(255, 99, 132)">Not Completed Tasks: ${project.notCompletedTasks}</li>
              </ul>
            </div>
          </div>
        `);

      // Check if the canvas element exists before creating the chart
      var canvas = document.getElementById(`chart-${project.projectName}`);
      if (canvas) {
        // Chart configuration
        const chartData = {
          labels: ["Completed", "Not Completed"],
          datasets: [
            {
              label: "Task Status",
              data: [
                parseInt(project.completedTasks),
                parseInt(project.notCompletedTasks),
              ],
              backgroundColor: ["rgb(75, 192, 192)", "rgb(255, 99, 132)"],
            },
          ],
        };

        const chartConfig = {
          type: "doughnut", // Change the chart type to doughnut
          data: chartData,
        };

        // Create chart
        new Chart(canvas, chartConfig);
      }
    });
  }
});
