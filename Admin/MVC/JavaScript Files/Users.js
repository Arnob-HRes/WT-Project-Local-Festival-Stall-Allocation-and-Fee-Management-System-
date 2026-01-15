  const addUserBtn = document.getElementById('addUserBtn');
  const layout     = document.getElementById('usersLayout');
  addUserBtn.addEventListener('click', () => {
    layout.classList.toggle('form-open');
  });
