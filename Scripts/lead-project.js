function showMilestoneForm(projectID) {
  // to show the pop up form for adding new project

  $("#addProjectModal").modal("show");

  $("#saveProjectBtn").click(function () {
    $("#addProjectModal").modal("hide");
  });
}

// To show the pop up form for adding task button
function showTaskForm(projectID) {
  // to show the pop up form for adding new project

  $("#addProjectTaskModal").modal("show");

  $("#saveProjectTasktBtn").click(function () {
    $("#addProjectTaskModal").modal("hide");
  });
}
