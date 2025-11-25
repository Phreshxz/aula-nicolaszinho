const loginContainer = document.getElementById('login-container');
const registerContainer = document.getElementById('register-container');
const toRegister = document.getElementById('toRegister');
const toLogin = document.getElementById('toLogin');

toRegister.addEventListener('click', () => {
    loginContainer.classList.add('hidden');
    registerContainer.classList.remove('hidden');
});

toLogin.addEventListener('click', () => {
    registerContainer.classList.add('hidden');
    loginContainer.classList.remove('hidden');
});

