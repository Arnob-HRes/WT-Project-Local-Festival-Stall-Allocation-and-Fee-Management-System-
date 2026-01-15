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



