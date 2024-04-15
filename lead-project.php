<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReMs-2.O</title>
    <link rel="icon" href="Images/icon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Stylesheets/home.css" />
    <link rel="stylesheet" href="Stylesheets/lead-project.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h4 class="heading">Create Milestones for projects</h4>
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
                        <th>Project Manager</th>
                        <th>Create Milestone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'config-php/lead-project-milestone-config.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <h4 class="heading">Create task for milestone</h4>
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
                        <th>Create Task</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'config-php/lead-project-task-config.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
     <!-- Input pop up modal for creating milestone  -->
     <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectModalLabel"style="color:black";>Create Milestones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addProjectForm" action="config-php/lead-project-milestone-insert-config.php" method="post">
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="totalMilestone" name="totalMilestone" placeholder="Enter total milestone" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="totalMember" name="totalMember" placeholder="Enter total member" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="projectID" name="projectID" placeholder="Enter project id" required>
                        </div>
                        <div class="form-group">
                            <label for="startDate" style="color:black">Start Date:</label>
                            <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="endDate" style="color:black">End Date:</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="budget" name="budget" placeholder="Enter Budget" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit" 
                          id="saveProjectBtn">Create Milestone</button>
                      </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Input pop up modal for creating task for each milestone  -->
    <div class="modal fade" id="addProjectTaskModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectModalLabel"style="color:black";>Create Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addProjectForm" action="config-php/lead-project-task-insert-config.php" method="post">
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="milestoneNum" name="milestoneNum" placeholder="Enter milestone number" required>
                        </div>
                        
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter task name" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="memberAssigned" name="memberAssigned" placeholder="Enter total member assigned" required>
                        </div>
                        <div class="form-group">
                            <label for="startDate" style="color:black">Start Date:</label>
                            <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Start Date" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="endDate" style="color:black">End Date:</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" placeholder="End Date" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="budget" name="budget" placeholder="Enter Budget" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="submit" 
                          id="saveProjectTaskBtn">Create Task</button>
                      </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="Scripts/dark-light-mode.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script src = "Scripts/lead-project.js"></script>
</body>
</html>
