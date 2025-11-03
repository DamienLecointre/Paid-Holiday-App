const login = document.getElementById("login");
const loginSignupContainer = document.querySelector(".login-signup-container ");
const iconWrapper = document.querySelector(".icon-wrapper");
const signupAccess = document.getElementById("signup-access")

const btnSubmit = document.querySelector(".btn-submit");
// console.log(signupAccess);

// SE CONNECTER
login.addEventListener("click", () => {
  // console.log("login");
  loginSignupContainer.classList.add("show-login-signup-container");
});

iconWrapper.addEventListener("click", () => {
  // console.log("delete");
  loginSignupContainer.classList.remove("show-login-signup-container");
});

signupAccess.addEventListener("click",()=> {
  console.log("go to signup");  
})

// DEMANDE DE CONGES
btnSubmit.addEventListener("click", () => {
  console.log("submit");
});
