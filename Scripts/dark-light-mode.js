// Function to switch to light mode
function switchToLightMode() {
  // Remove dark mode class
  document.body.classList.remove("dark-mode");
  // Add light mode class
  document.body.classList.add("light-mode");
  // Save mode preference to local storage
  localStorage.setItem("mode", "light");
}

// Function to switch to dark mode
function switchToDarkMode() {
  // Remove light mode class
  document.body.classList.remove("light-mode");
  // Add dark mode class
  document.body.classList.add("dark-mode");
  // Save mode preference to local storage
  localStorage.setItem("mode", "dark");
}

// Check for mode preference in local storage when the page loads
document.addEventListener("DOMContentLoaded", function () {
  const mode = localStorage.getItem("mode");
  if (mode === "dark") {
    switchToDarkMode();
  } else {
    switchToLightMode(); // Default to light mode if no preference is found
  }
});

document
  .querySelector('.dropdown-item[href="#light-mode"]')
  .addEventListener("click", switchToLightMode);

// Add event listener for switching to dark mode
document
  .querySelector('.dropdown-item[href="#dark-mode"]')
  .addEventListener("click", switchToDarkMode);
