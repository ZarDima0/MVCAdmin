function SigbIn (e) {
    const inputLogin = document.querySelector('.form__login');
    const inputPassowd = document.querySelector('.form__password');

    if (inputLogin.value == 0 && inputPassowd.value == 0) {
        e.preventDefault()
        inputLogin.classList.add('form__login-disabled')
        inputPassowd.classList.add('form__password-disabled')
        return
    } if (inputLogin.value != null && inputPassowd.value != null) {
        inputLogin.classList.remove('form__login-disabled')
        inputPassowd.classList.remove('form__password-disabled')
    }
}



document.querySelector('.form').addEventListener('submit',SigbIn)


