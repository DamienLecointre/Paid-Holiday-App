// LOGIN VARIABLES
const btnLogin = document.getElementById("login");
const loginSignupContainer = document.querySelector(".login-signup-container ");
const loginWrapper = document.querySelector(".login-wrapper");
const signupWrapper = document.querySelector(".signup-wrapper");
const iconWrappers = document.querySelectorAll(".icon-wrapper");
const signupAccess = document.getElementById("signup-access");
const loginAccess =document.getElementById("login-access")

// SUBMIT VARIABLES
const btnSubmit = document.querySelector(".btn-submit");
// console.log(loginAccess);

// ___________________________________________________________
// ___________________________________________________________

//FUNCTIONS

function remove(variable,classe) {
  variable.classList.remove(classe);
}

function add(variable,classe) {
  variable.classList.add(classe);
}

// SE CONNECTER
btnLogin.addEventListener("click", () => {
  // console.log("login");
  loginSignupContainer.classList.add("show-login-signup-container");
  loginWrapper.classList.add("show-login-wrapper");
});

iconWrappers.forEach((icon) => {
  icon.addEventListener("click", () => {
    // console.log("delete");
    loginSignupContainer.classList.remove("show-login-signup-container");
    signupWrapper.classList.remove("show-signup-wrapper");
  });
})

signupAccess.addEventListener("click", (e) => {
  // console.log("go to signup");
  e.preventDefault();
  loginWrapper.classList.remove("show-login-wrapper");
  signupWrapper.classList.add("show-signup-wrapper");
});

loginAccess.addEventListener("click",(e)=> {
   e.preventDefault();
   signupWrapper.classList.remove("show-signup-wrapper");
   loginWrapper.classList.add("show-login-wrapper");
})

// DEMANDE DE CONGES
btnSubmit.addEventListener("click", () => {
  console.log("submit");
});
