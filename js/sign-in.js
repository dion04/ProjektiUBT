const validateForm = () => {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  var emailRegex = /^[\w\.-]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address!");
    return false;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters!");
    return false;
  }

  return true;
};
