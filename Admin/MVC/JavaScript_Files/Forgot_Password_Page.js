// forgot_password.js
document.addEventListener('DOMContentLoaded', function () {
    const pwInput = document.getElementById('newPassword');
    const confirmInput = document.getElementById('confirmPassword');
    const reqBox = document.getElementById('pwReq');
    const form = document.getElementById('forgotForm');

    function checkPassword(pw) {
        const rules = {
            length: pw.length >= 8,
            upper: /[A-Z]/.test(pw),
            lower: /[a-z]/.test(pw),
            digit: /\d/.test(pw),
            special: /[@$!%*?&]/.test(pw)
        };
        let html = '';
        html += (rules.length ? '✅' : '❌') + ' At least 8 characters<br>';
        html += (rules.upper ? '✅' : '❌') + ' At least 1 uppercase letter<br>';
        html += (rules.lower ? '✅' : '❌') + ' At least 1 lowercase letter<br>';
        html += (rules.digit ? '✅' : '❌') + ' At least 1 number<br>';
        html += (rules.special ? '✅' : '❌') + ' At least 1 special (@$!%*?&)';
        reqBox.innerHTML = html;
        return Object.values(rules).every(Boolean);
    }

    pwInput.addEventListener('input', () => {
        checkPassword(pwInput.value);
    });

    form.addEventListener('submit', function (e) {
        const ok = checkPassword(pwInput.value);
        if (!ok) {
            e.preventDefault();
            alert('Password not strong enough. Please follow all requirements.');
            pwInput.focus();
            return;
        }
        if (pwInput.value !== confirmInput.value) {
            e.preventDefault();
            alert('Passwords do not match.');
            confirmInput.focus();
        }
    });
});
