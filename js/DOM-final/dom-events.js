const usernameField = document.getElementById("username");
const passwordField = document.getElementById("password");
const confirmationField = document.getElementById("password_confirmation");

const errorContainer = document.querySelector("#errors");

const submitBtn = document.getElementsByClassName("submit-btn")[0];

// console.log(usernameField);

let values = {
  username: null,
  password: null,
  password_confirmation: null,
};

//adding onChange event Listener
usernameField.addEventListener("keyup", function (event) {
  values.username = event.target.value;
});

passwordField.addEventListener("keyup", (event) => {
  values.password = event.target.value;
});

confirmationField.addEventListener("keyup", (event) => {
  values.password_confirmation = event.target.value;
});

// const displayErrors = (errors) => {
//   console.log("❌ Errors ==>");
//   for (key in errors) {
//     console.log(errors[key]);
//   }
// };

const isValid = () => {
  const errors = {};
  if (!values.username) {
    errors.username = "Username is required";
  } else {
    delete errors.username;
  }
  if (!values.password) {
    errors.password = "Password is required";
  } else {
    delete errors.password;
  }
  if (values.password_confirmation !== values.password) {
    errors.password_confirmation = "Password confirmation doesn't match";
  } else {
    delete errors.password_confirmation;
  }
  return errors;
};

const handleSubmit = () => {
  const errors = isValid();
  const errorValues = Object.values(errors).length;
  if (errorValues !== 0) {
    displayErrors(errors);
  } else {
    console.log(values);
    alert("Submission success");
  }
};

submitBtn.addEventListener("click", handleSubmit);

const clearErrorContainer = () => {
  errorContainer.innerHTML = null;
};

const getTemplate = (error) => {
  const element = document.createElement("span");
  element.classList.add("error-msg");
  element.innerHTML = error;
  return element;
};

const displayErrors = (errors) => {
  clearErrorContainer();
  for (key in errors) {
    const element = getTemplate(errors[key]);
    errorContainer.appendChild(element);
  }
};
