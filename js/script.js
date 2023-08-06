// Signup Form Section
const primaryButton = document.querySelector('.primary-button');
const signupForm = document.querySelector('.signup-form-section');
const closeBtn = document.querySelector('.close');

primaryButton.addEventListener('click', function () {
    signupForm.classList.add('active');
});

closeBtn.addEventListener('click', function () {
    signupForm.classList.remove('active');
});

// login Form Section

const secondaryButton = document.querySelector('.secondary-button');
const loginForm = document.querySelector('.login-form-section');
const loginCloseButton = document.querySelector('.loginclosebutton');

secondaryButton.addEventListener('click', function () {
    loginForm.classList.add('active-login');
});

loginCloseButton.addEventListener('click', function () {
    loginForm.classList.remove('active-login');
});

