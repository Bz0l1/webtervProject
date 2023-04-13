function showError(input, message) {
    const errorElement = input.parentElement.querySelector('.error-message');
    errorElement.textContent = message;
    input.classList.add('error');
}

function clearError(input) {
    const errorElement = input.parentElement.querySelector('.error-message');
    errorElement.textContent = '';
    input.classList.remove('error');
}

document.addEventListener('DOMContentLoaded', function () {
    function validateName() {
        const name = document.querySelector('input[name="name"]');
        const nameRegex = /^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+( [A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/;

        if (!nameRegex.test(name.value)) {
            showError(name, 'A név nem helyes formátumú (pl. Kovács Ilona)!');
        } else {
            clearError(name);
        }
    }

    function validateEmail() {
        const email = document.querySelector('input[name="email"]');
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailRegex.test(email.value)) {
            showError(email, 'Érvénytelen e-mail cím!');
        } else {
            clearError(email);
        }
    }

    function validatePassword() {
        const pass = document.querySelector('input[name="psw"]');
        const passRepeat = document.querySelector('input[name="psw-repeat"]');
        const passRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
      
        if (passRegex.test(pass.value)) {
          passRepeat.disabled = false;
          passRepeat.placeholder = "Írja be újra a jelszót";
        } else {
          passRepeat.disabled = true;
          passRepeat.placeholder = "Először adjon meg egy megfelelő jelszót!";
        }
      }
      

    function validatePasswordRepeat() {
        const pass = document.querySelector('input[name="psw"]');
        const passRepeat = document.querySelector('input[name="psw-repeat"]');

        if (pass.value !== passRepeat.value) {
            showError(passRepeat, "A jelszó nem egyezik!");
        }
        else {
            clearError(passRepeat);
        }
    }

    document.querySelector('input[name="name"]').addEventListener('input', validateName);
    document.querySelector('input[name="email"]').addEventListener('input', validateEmail);
    document.querySelector('input[name="psw"]').addEventListener('input', validatePassword);
    document.querySelector('input[name="psw-repeat"]').addEventListener('input', validatePasswordRepeat);
    
});

