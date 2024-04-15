<?php 
  session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="logo">
        <img src="Images/icon.png" alt="" style="width: 2rem" />

        <a class="navbar-brand" href="#">ReMs-2.O</a>
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto navbar-css">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project.php">Add Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lead-project.php">Lead Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gantt.php">Gantt Chart</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span><?php if(isset($_SESSION['Name'])){
                echo $_SESSION['Name'];
                
            }
            else{
              echo "Account";}?></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profile.php">Your Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#light-mode"
                >Switch to Light Mode</a
              >
              <a class="dropdown-item" href="#dark-mode">Switch to Dark Mode</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1 class="display-3">ReMs-2.O</h1>
      <p class="lead">
        Empowering startups to manage renewable energy projects efficiently
      </p>
    </div>