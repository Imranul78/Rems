function accountType(type) {
  var text = document.getElementById("text");
  var formDiv = document.getElementById("form");
  text.innerHTML = `<p class="js-text">Hello, <span>${type} !</span><br>
        Please fill out the form below to sign up</p>`;
  if (type == "startup") {
    formDiv.innerHTML = "";
    formDiv.innerHTML = `
    <form action="config-php/signUp-config.php" id="signUpFormStartUp" method="POST">
          <input type="text" name="startUpName" placeholder="Start up name.." required/>
          <input type="number" name="phone" id="" placeholder="Phone" required/>
          <input type="email" name="email" id="" placeholder="Email" required/>
          <input type="text" name="address" placeholder="Address" required/>
          <input type="password" name="password" id="" placeholder="Password" required/>
          <div class="login-button">
            <p>Already have an account? <a href="index.php">Login</a></p>
            <button type="submit" name="submit" value="submit">Sign Up</button>
          </div>
    </form>
    
    `;
  } else if (type == "investor") {
    formDiv.innerHTML = "";
    formDiv.innerHTML = `
        <form action="config-php/signUp-config.php" id="signUpFormInvestor" method="POST">
              <input type="text" placeholder="First Name" name="firstName" required/>
              <input type="text" placeholder="Last Name" name="lastName" required/>
              <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              <select id="type" name="type" required>
                <option value="" disabled selected>Select your type</option>
                <option value="Angel Investor">Angel Investor</option>
                <option value="VC">VC</option>
                <option value="PE Investor">PE Investor</option>
                <option value="Other">Other</option>
              </select>
              <input type="number" name="phone" id="" placeholder="Phone" required/>
              <input type="email" name="email" id="" placeholder="Email" required/>
              <input type="text" placeholder="Address" name="address" required/>
              <input type="password" name="password" id="" placeholder="Password" required/>
              <div class="login-button">
                <p>Already have an account? <a href="index.php">Login</a></p>
                
                <button type="submit" name="submit" value="submit">Sign Up</button>
              </div>
      </form>
    
    `;
  }
}
