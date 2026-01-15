let categories = [];

const tbody      = document.getElementById('cat-body');
const searchBox  = document.getElementById('cat-search');
const form       = document.getElementById('cat-form');
const clearBtn   = document.getElementById('btn-clear');

const nameInput   = document.getElementById('cat-name');
const slugInput   = document.getElementById('cat-slug');
const descInput  = document.getElementById('cat-description');
const statusInput = document.getElementById('cat-status');
const orderInput  = document.getElementById('cat-order');
const colorInput  = document.getElementById('cat-color');

const errName     = document.getElementById('err-name');

function badge(status) {
  return status === 'Active'
    ? '<span class="badge badge-active">Active</span>'
    : '<span class="badge badge-inactive">Inactive</span>';
    
}

function renderTable() {
  tbody.innerHTML = '';

  const term = (searchBox?.value || '').toLowerCase();

  const filtered = categories.filter(c =>
    c.name.toLowerCase().includes(term) || c.slug.toLowerCase().includes(term)
    
  );

  if (filtered.length === 0) {
    const tr = document.createElement('tr');
    tr.innerHTML = '<td colspan="6">No categories found.</td>';
    tbody.appendChild(tr);
    return;
  }

  filtered
    .slice()
    .sort((a, b) => (a.display_order ?? 0) - (b.display_order ?? 0) || a.name.localeCompare(b.name))
    .forEach(cat => {
      const tr = document.createElement('tr');
      tr.dataset.id = cat.id;
      tr.innerHTML = `
        <td>${cat.name}</td>
        <td>${cat.slug}</td>
        <td>${cat.description || ''}</td>
        <td>${cat.total_stalls}</td>
        <td>${badge(cat.status)}</td>

        <td class="actions">
          <button class="btn-sm btn-danger" data-action="delete">Delete</button>
        </td>
      `;
      tbody.appendChild(tr);
    });
}

async function loadCategories() {
  const term = (searchBox?.value || '').trim();
  const params = new URLSearchParams({ action: 'list', search: term });

  const res  = await fetch('../Controller/CategoriesController.php?' + params.toString());
  const json = await res.json();
  if (json.success) {
    categories = json.data;
    renderTable();
  } else {
    console.error(json);
  }
}

function clearForm() {
  nameInput.value   = '';
  slugInput.value   = '';
  descInput.value   = '';
  statusInput.value = 'Active';
  orderInput.value  = '';
  colorInput.value  = '#2563eb';
  errName.textContent = '';
}

// validation
async function validateForm() {
  errName.textContent = '';
  const name = nameInput.value.trim();
  if (!name) {
    errName.textContent = 'Category name is required.';
    return false;
  }
  return true;
}

form.addEventListener('submit', async e => {
  e.preventDefault();
  if (!(await validateForm())) return;

  const name   = nameInput.value.trim();
  let slug     = slugInput.value.trim();
  const desc   = descInput.value.trim();
  const status = statusInput.value;
  const order  = parseInt(orderInput.value, 10) || 1;
  const color  = colorInput.value;

  if (!slug) {
    slug = name.toLowerCase().replace(/[^a-z0-9]+/gi, '-');
  }

  const fd = new FormData();
  fd.append('action', 'save');
  
  fd.append('name', name);
  fd.append('slug', slug);
  fd.append('description', desc);
  fd.append('status', status);
  fd.append('display_order', order);
  fd.append('color_tag', color);

  const res  = await fetch('../Controller/CategoriesController.php', {
    method: 'POST',
    body: fd
  });
  const json = await res.json();

  if (!json.success) {
    if (json.errors && json.errors.name) {
      errName.textContent = json.errors.name;
    }
    return;
  }

  clearForm();
  await loadCategories();
});

tbody.addEventListener('click', async e => {
  const btn = e.target.closest('button[data-action="delete"]');
  if (!btn) return;

  const tr  = btn.closest('tr');
  const id  = tr.dataset.id;
  if (!id) return;

  if (!confirm('Delete this category?')) return;

  const fd = new FormData();
  fd.append('action', 'delete');
  fd.append('id', id);

  const res  = await fetch('../Controller/CategoriesController.php', {
    method: 'POST',
    body: fd
  });
  const json = await res.json();
  if (json.success) {
    await loadCategories();
  }
});

if (searchBox) {
  searchBox.addEventListener('input', () => {
    clearTimeout(searchBox._t);
    searchBox._t = setTimeout(loadCategories, 200);
  });
}

// Clear button
clearBtn.addEventListener('click', clearForm);

// initial
document.addEventListener('DOMContentLoaded', loadCategories);




