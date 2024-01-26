let form = document.getElementById("form");

const validateForm = () => {
  let name = document.getElementById("name").value;
  let surname = document.getElementById("surname").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let phone = document.getElementById("phone").value;
  let birthday = document.getElementById("birthday").value;
  let opBirthday = new Date(birthday);
  let currentDate = new Date().toJSON().slice(0, 10) + " 01:00:00";

  let age = ~~((Date.now(currentDate) - opBirthday) / 31557600000);

  var nameRegex = /^[a-zA-Z\s]+$/;
  if (!nameRegex.test(name)) {
    alert("Please enter a valid name!");
    return false;
  }

  var surnameRegex = /^[a-zA-Z\s]+$/;
  if (!surnameRegex.test(surname)) {
    alert("Please enter a valid surname!");
    return false;
  }

  var phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
  if (!phoneRegex.test(phone)) {
    alert("Please enter a valid phone number! (example: (+1)123456789)");
    return false;
  }

  if (age < 18) {
    alert("You have to be over 18 to sign-up!");
    return false;
  }

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
    document.location.href = "/dashboard.php";
  }
});
