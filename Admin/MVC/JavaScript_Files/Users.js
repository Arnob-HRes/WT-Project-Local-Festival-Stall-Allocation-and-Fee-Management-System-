document.addEventListener('DOMContentLoaded', () => {
    const addUserBtn = document.getElementById('addUserBtn');
    const layout = document.getElementById('usersLayout');

    if(addUserBtn && layout) {
        addUserBtn.addEventListener('click', () => {
            layout.classList.toggle('form-open');
            
            
            if(layout.classList.contains('form-open')) {
                addUserBtn.textContent = 'Close Form';
            } else {
                addUserBtn.textContent = 'Add User';
            }
        });
    }
});