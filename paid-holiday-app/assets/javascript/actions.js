// LOGIN VARIABLES
const btnLogin = document.getElementById("login");
const loginSignupContainer = document.querySelector(".login-signup-container");
const loginWrapper = document.querySelector(".login-wrapper");
const signupWrapper = document.querySelector(".signup-wrapper");
const iconWrappers = document.querySelectorAll(".icon-wrapper");
const signupAccess = document.getElementById("signup-access");
const loginAccess =document.getElementById("login-access");

// PROFIL VARIABLES
const avatar=document.querySelector(".avatar");
const profilContainer=document.querySelector(".profil-container")

// SUBMIT VARIABLES
const btnSubmit = document.querySelector(".btn-submit");
// console.log(avatar);

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
if (btnLogin) {
  btnLogin.addEventListener("click", () => {
    add(loginSignupContainer,"show-login-signup-container")
    add(loginWrapper,"show-login-wrapper")
  });
}

iconWrappers.forEach((icon) => {
  icon.addEventListener("click", () => {
    remove(loginSignupContainer,"show-login-signup-container")
    remove(signupWrapper,"show-signup-wrapper")
  });
})

signupAccess.addEventListener("click", (e) => {
  e.preventDefault();
  remove(loginWrapper,"show-login-wrapper")
  add(signupWrapper,"show-signup-wrapper")
});

loginAccess.addEventListener("click",(e)=> {
   e.preventDefault();
   remove(signupWrapper,"show-signup-wrapper")
   add(loginWrapper,"show-login-wrapper")
})

// ACCES AU PROFIL
isHovering=false

avatar.addEventListener("mouseenter",()=> {
  add(profilContainer,"show-profil-container")
})

avatar.addEventListener("mouseleave",()=> {
  setTimeout(() => {
    if(isHovering===false) {
      remove(profilContainer,"show-profil-container")
    } 
  }, 300);
})  

profilContainer.addEventListener("mouseenter",()=> {
  isHovering=true
})

profilContainer.addEventListener("mouseleave",()=> {
  isHovering=false
  setTimeout(() => {
    remove(profilContainer,"show-profil-container")
  }, 300);
})


// DEMANDE DE CONGES
btnSubmit.addEventListener("click", () => {
  console.log("submit");
});
