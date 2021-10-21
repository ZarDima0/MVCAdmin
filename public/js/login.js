function SigbIn (e) {
    const inputLogin = document.querySelector('.form__login');
    const inputPassowd = document.querySelector('.form__password');

    if (inputLogin.value == 0 && inputPassowd.value == 0) {
        inputLogin.classList.add('form__login-disabled')
        inputPassowd.classList.add('form__password-disabled')
        return
    } if (inputLogin.value != null && inputPassowd.value != null) {
        inputLogin.classList.remove('form__login-disabled')
        inputPassowd.classList.remove('form__password-disabled')
        console.log('все хорошо')
    }
}



document.querySelector('.form').addEventListener('submit',SigbIn)


