let form = document.getElementById("form");

const validateForm = () => {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  var emailRegex = /^[\w\.-]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address!");
    return false;
  }

  let passwordRegex = /^[A-Z][a-z]+[0-9]{3}/;
  if (!passwordRegex.test(password)) {
    alert(
      "Password must be at least 8 characters, first element Uppercase and atleast three numbers!"
    );
    return false;
  }

  return true;
};

form.addEventListener("submit", (event) => {
  event.preventDefault();
  if (validateForm()) {
    let host = window.location.host;
    document.location.href = "/index.html";
  }
});
