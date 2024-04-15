<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReMs-2.O</title>
    <link rel="icon" href="Images/icon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Stylesheets/project.css">
    <link rel="stylesheet" href="Stylesheets/home.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
    <?php include 'header.php'; ?>
    
    <h3 class="heading">Projects</h3>
    
    <div class="row horizontal-bar">
      <div class="col">
        <hr>
      </div>
    </div>
    <div class="new-project">
        <button id="addProjectBtn">Add new project</button>
    </div>

    <!-- Input Project Modal -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addProjectForm" action="config-php/project-config.php" method="POST">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="projectName" name="projectName" placeholder="Enter project name" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="projectLeaderId" name="projectLeaderId" placeholder="Enter project leader id" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit" id="saveProjectBtn">Save Project</button>
                      </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    

    
    <div class="row  project-list" id="project-list">
        
    </div>

      

    <?php include 'footer.php'; ?>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Use full version of jQuery -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Scripts/dark-light-mode.js"></script>
    
    <script src="Scripts/project.js"></script>

    


</body>
</html>
