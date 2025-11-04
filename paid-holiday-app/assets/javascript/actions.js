const login = document.getElementById("login");
const loginSignupContainer = document.querySelector(".login-signup-container ");
const loginWrapper = document.querySelector(".login-wrapper");
const signupWrapper = document.querySelector(".signup-wrapper");
const iconWrapper = document.querySelector(".icon-wrapper");
const signupAccess = document.getElementById("signup-access")

const btnSubmit = document.querySelector(".btn-submit");
// console.log(signupAccess);

// SE CONNECTER
login.addEventListener("click", () => {
  // console.log("login");
  loginSignupContainer.classList.add("show-login-signup-container");
  loginWrapper.classList.add("show-login-wrapper");
});

iconWrapper.addEventListener("click", () => {
  // console.log("delete");
  loginSignupContainer.classList.remove("show-login-signup-container");
});

signupAccess.addEventListener("click",(e)=> {
  // console.log("go to signup");  
  e.preventDefault();
  loginWrapper.classList.remove("show-login-wrapper");
  signupWrapper.classList.add("show-signup-wrapper");
})

// DEMANDE DE CONGES
btnSubmit.addEventListener("click", () => {
  console.log("submit");
});
