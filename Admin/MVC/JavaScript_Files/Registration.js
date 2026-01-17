document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const messageDiv = document.getElementById('message');
    const registerBtn = document.getElementById('registerBtn');
    const btnText = document.querySelector('.btn-text');
    const loading = document.querySelector('.loading');

    // Password match check
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');

    confirmPassword.addEventListener('input', function() {
        if (password.value && password.value !== confirmPassword.value) {
            showMessage('Passwords do not match!', 'error');
        } else {
            hideMessage();
        }
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validation
        const username = document.getElementById('username').value.trim();
        const fullname = document.getElementById('fullname').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const email = document.getElementById('email').value.trim();
        const pass = document.getElementById('password').value;
        const confirmPass = document.getElementById('confirm_password').value;
        const userType = document.getElementById('userType').value;

        if (!username || !fullname || !phone || !email || !pass || !confirmPass || !userType) {
            showMessage('Please fill all required fields!', 'error');
            return;
        }

        if (pass !== confirmPass) {
            showMessage('Passwords do not match!', 'error');
            return;
        }

        if (pass.length < 6) {
            showMessage('Password must be at least 6 characters!', 'error');
            return;
        }

        if (!/^\d{11}$/.test(phone.replace(/[-\s]/g, ''))) {
            showMessage('Enter valid 11-digit phone number (01xxxxxxxxx)!', 'error');
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showMessage('Enter valid email address!', 'error');
            return;
        }

        // Show loading
        registerBtn.disabled = true;
        btnText.style.display = 'none';
        loading.style.display = 'inline';
        hideMessage();

        // Prepare data (no file, simple object)
        const formData = new FormData();
        formData.append('username', username);
        formData.append('fullname', fullname);
        formData.append('phone', phone);
        formData.append('email', email);
        formData.append('password', pass);
        formData.append('address', document.getElementById('address').value);
        formData.append('user_type', userType);

        // AJAX submit
        fetch('registration.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            registerBtn.disabled = false;
            btnText.style.display = 'inline';
            loading.style.display = 'none';

            if (data.success) {
                showMessage(data.message || 'Registration successful! Redirecting...', 'success');
                setTimeout(() => {
                    window.location.href = 'login.html';
                }, 2000);
            } else {
                showMessage(data.error || 'Registration failed!', 'error');
            }
        })
        .catch(error => {
            registerBtn.disabled = false;
            btnText.style.display = 'inline';
            loading.style.display = 'none';
            showMessage('Network error! Please try again.', 'error');
            console.error('Error:', error);
        });
    });

    function showMessage(text, type) {
        const messageDiv = document.getElementById('message');
        messageDiv.textContent = text;
        messageDiv.className = `message ${type}`;
    }

    function hideMessage() {
        const messageDiv = document.getElementById('message');
        messageDiv.textContent = '';
        messageDiv.className = 'message';
    }
});
