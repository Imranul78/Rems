<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REPP_2.O</title>
    <link rel="icon" href="Images/icon.png" />
    <link rel="stylesheet" href="Stylesheets/index.css" />
  </head>
  <body>
    <div class="container">
      <h1>Choose Account Type</h1>
      <div class="account-type">
        <div class="startup">
          <input
            type="image"
            src="Images/startup.png"
            alt="Image 1"
            id="imageButton1"
            name="type"
            value = "startup"
            class="image-button"
            onclick="accountType('startup')"
          />

          <p id="tag">Startup</p>
        </div>
        <div class="investor">
          <input
            type="image"
            src="Images/investor.png"
            alt="Image 2"
            id="imageButton2"
            class="image-button"
            name="type"
            value = "investor"
            onclick="accountType('investor')"
          />
          <p id="tag">Investor</p>
        </div>
      </div>
      <div class="text" id="text"></div>
      <div class="form" id="form">
        
      </div>
    </div>
    <script src="Scripts/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
