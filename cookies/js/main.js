const username = document.querySelector('#name');
const pass = document.querySelector('#pass');
const login = document.querySelector('#login');

username.addEventListener('keyup', validate);
pass.addEventListener('keyup', validate);

function validate() {
    if (username.value.length > 0 && pass.value.length > 0) {
        login.removeAttribute('disabled', '');
        console.log("success");
    } else {
        login.setAttribute('disabled', '');
        console.log("error");
    }
}