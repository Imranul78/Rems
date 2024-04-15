<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ReMs-2.O</title>
    <link rel="icon" href="Images/icon.png" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="Stylesheets/lead-project.css">
    <link rel="stylesheet" href="Stylesheets/home.css" />
  </head>
  <body>
    
    <?php 
      include 'header.php';
    ?>
    <div class="container">
      
      <div class="row feature">
        <div class="col-md-4 text-center we-do">
          <i class="fas fa-cogs feature-icon"></i>
          <h2 class="feature-heading">Project Management</h2>
          <p class="feature-description">
            Divide projects into milestones and tasks for better organization
            and tracking.
          </p>
        </div>
        <div class="col-md-4 text-center we-do">
          <i class="fas fa-chart-line feature-icon"></i>
          <h2 class="feature-heading">Analytics</h2>
          <p class="feature-description">
            Analyze project performance and energy production data to optimize
            operations.
          </p>
        </div>
        <div class="col-md-4 text-center we-do">
          <i class="fas fa-users feature-icon"></i>
          <h2 class="feature-heading">Collaboration</h2>
          <p class="feature-description">
            Collaborate seamlessly with team members and stakeholders for
            project success.
          </p>
        </div>
      </div>
    </div>

    <!-- Update area for projection completion -->
    <div class="container">
        <h4 class="heading">Update Task Completion Status</h4>
        <div class="row horizontal-bar">
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Milestone Number</th>
                        <th>Task Name </th>
                        <th>Project Leader</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'config-php/home-update-taskStatus.php'; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php 
      include 'footer.php';
    ?>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="Scripts/dark-light-mode.js"></script>
    <script src="Scripts/home.js"></script>
  </body>
</html>
