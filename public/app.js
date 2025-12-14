const inscritForm = document.getElementById('form');
const userName = document.getElementById('username');
const password = document.getElementById('password');
const confirmPasseword = document.getElementById('confirm_password');
const errorMssaj = document.getElementById('errorMsg');

inscritForm.addEventListener('submit', function (e) {
    let errors = [];
    const usernameValue = userName.value.trim();
    if (usernameValue.length < 3 || !/^[a-zA-Z0-9]+$/.test(usernameValue)) {
        errors.push("Nom d’utilisateur obligatoire, minimum 3 caractères alphanumériques.");
    }
    const passwordValue = password.value;
    if (passwordValue.length < 6) {
        errors.push("Mot de passe obligatoire, minimum 6 caractères.");
    }
    if (passwordValue !== confirmPasseword.value) {
        errors.push("Les mots de passe ne correspondent pas.");
    }
    if (errors.length > 0) {
        e.preventDefault(); 
        errorMssaj.innerHTML = errors.join("<br>");
    } else {
        errorMssaj.innerHTML = "";
    }
    
});

