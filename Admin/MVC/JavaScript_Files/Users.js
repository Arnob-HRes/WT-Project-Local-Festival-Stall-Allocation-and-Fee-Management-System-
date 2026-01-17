document.addEventListener('DOMContentLoaded', () => {
    const addUserBtn = document.getElementById('addUserBtn');
    const layout = document.getElementById('usersLayout');
    const userForm = document.getElementById('addUserForm');
    const userTableBody = document.getElementById('userTableBody');

    
    if (addUserBtn && layout) {
        addUserBtn.addEventListener('click', () => {
            layout.classList.toggle('form-open');
            addUserBtn.textContent = layout.classList.contains('form-open') ? 'Close Form' : 'Add User';
        });
    }

    
    if (userForm) {
        userForm.addEventListener('submit', function (e) {
            e.preventDefault(); 

            console.log("Submitting form via AJAX...");

            const formData = new FormData(this);

           
            fetch('UserController.php?action=save', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert('User added successfully!');
                    
                    location.reload(); 
                } else {
                    
                    alert('Error: ' + (data.error || data.message));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Connection Error: কন্ট্রোলার ফাইল খুঁজে পাওয়া যাচ্ছে না অথবা সার্ভার এরর।');
            });
        });
    }

    
    const cancelBtn = document.getElementById('cancelBtn');
    if(cancelBtn) {
        cancelBtn.addEventListener('click', () => {
            layout.classList.remove('form-open');
            addUserBtn.textContent = 'Add User';
        });
    }
});