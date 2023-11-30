function checkPasswordStrength() {
  var password = document.getElementById("Password").value;
  var passwordStrength = document.getElementById("passwordStrength");

  // Check password length
  if (password.length < 8) {
    passwordStrength.innerHTML = "Suggestion: Make your password at least 8 characters long.";
    return;
  }

  // Check password strength
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[!@#$%^&*()]+/)) {
    strength += 1;
  }

  // Display password strength
  if (strength < 2) {
    passwordStrength.innerHTML = "Weak password.";
  } else if (strength < 4) {
    passwordStrength.innerHTML = "Medium password.";
  } else {
    passwordStrength.innerHTML = "Strong password!";
  }
  
}

