document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission
      if (validateForm()) {
        this.submit(); // Submit the form if validation passes
      }
    });
  }

  function validateForm() {
    return validateRegistrationForm();
  }

  function validateRegistrationForm() {
    const username = document
      .querySelector("input[name='username']")
      .value.trim();
    const firstName = document
      .querySelector("input[name='first_name']")
      .value.trim();
    const lastName = document
      .querySelector("input[name='last_name']")
      .value.trim();
    const email = document.querySelector("input[name='email']").value.trim();
    const age = document.querySelector("input[name='age']").value.trim();
    const phone = document.querySelector("input[name='phone']").value.trim();
    const gender = document.querySelector("input[name='gender']").value.trim();
    const password = document
      .querySelector("input[name='password']")
      .value.trim();
    const confirmPassword = document
      .querySelector("input[name='confirm_password']")
      .value.trim();

    // Username validation
    if (username.length < 3) {
      alert("Username must be at least 3 characters long.");
      return false;
    }

    // First name and last name validation
    if (firstName.length < 2 || lastName.length < 2) {
      alert("First name and last name must be at least 2 characters long.");
      return false;
    }

    // Email validation
    if (!isValidEmail(email)) {
      alert("Please enter a valid email address.");
      return false;
    }

    // Age validation
    if (isNaN(age) || age < 18 || age > 120) {
      alert("Age must be a number between 18 and 120.");
      return false;
    }

    // Phone validation
    if (!/^\d{10}$/.test(phone)) {
      alert("Phone number must be exactly 10 digits.");
      return false;
    }

    // Gender validation
    if (gender.length < 1) {
      alert("Gender is required.");
      return false;
    }

    // Password validation
    if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return false;
    }

    // Confirm password validation
    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }

    return true; // All validations passed
  }

  function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email regex
    return re.test(email);
  }
});
