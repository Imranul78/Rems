function accountType(type) {
  var text = document.getElementById("text");
  var formDiv = document.getElementById("form");
  text.innerHTML = `<p class="js-text">Hello, <span>${type} !</span><br>
          Please fill out the form below to sign in</p>`;
  if (type == "startup") {
    formDiv.innerHTML = "";
    formDiv.innerHTML = `
        <form action="config-php/index-config.php" method="post">
            <input type="number" name="id" placeholder="StartUp Id" />
            <input type="password" name="password" id="" placeholder="Password" />
            <div class="login-button">
            <p>No account? <a href="sign-up.php">Signup</a></p>
            <button type="submit" name="submit" value="startup">Sign In</button>
            </div>
       </form>
    
    `;
  } else if (type == "investor") {
    formDiv.innerHTML = "";
    formDiv.innerHTML = `
        <form action="config-php/index-config.php" method="post">
                <input type="number" name="id" placeholder="Investor Id" />
                <input type="password" name="password" id="" placeholder="Password" />
                <div class="login-button">
                <p>No account? <a href="sign-up.php">Signup</a></p>
                <button type="submit" name="submit" value="investor">Sign In</button>
                </div>
        </form>
    `;
  }
}
