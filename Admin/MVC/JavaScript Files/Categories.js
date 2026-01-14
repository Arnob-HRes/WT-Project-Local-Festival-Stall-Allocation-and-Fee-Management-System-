let categories = [
  { id: 1, name: 'Food',        slug: 'food',        description: 'All kinds of food and beverages stalls', totalStalls: 12, status: 'Active',   order: 1, color: '#16a34a' },
  { id: 2, name: 'Art',         slug: 'art',         description: 'Handmade and creative art stalls',      totalStalls:  6, status: 'Active',   order: 2, color: '#2563eb' },
  { id: 3, name: 'Toys',        slug: 'toys',        description: 'Toys and kids’ items',                  totalStalls:  4, status: 'Active',   order: 3, color: '#f97316' },
  { id: 4, name: 'Accessories', slug: 'accessories', description: 'Fashion, bags, jewellery, etc.',        totalStalls:  5, status: 'Active',   order: 4, color: '#6b21a8' },
  { id: 5, name: 'Hand Craft',  slug: 'hand-craft',  description: 'Hand crafted items and souvenirs',      totalStalls:  3, status: 'Active',   order: 5, color: '#4b5563' },
  { id: 6, name: 'Arcade',      slug: 'arcade',      description: 'Games and entertainment (rides, VR, etc.)', totalStalls: 2, status: 'Active', order: 6, color: '#22c55e' }
];

let editingId = null;

const tbody      = document.getElementById('cat-body');
const searchBox  = document.getElementById('cat-search');
const form       = document.getElementById('cat-form');
const clearBtn   = document.getElementById('btn-clear');

const nameInput  = document.getElementById('cat-name');
const slugInput  = document.getElementById('cat-slug');
const descInput  = document.getElementById('cat-description');
const statusInput= document.getElementById('cat-status');
const orderInput = document.getElementById('cat-order');
const colorInput = document.getElementById('cat-color');

const errName   = document.getElementById('err-name');

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
    .sort((a, b) => a.order - b.order || a.name.localeCompare(b.name))
    .forEach(cat => {
      const tr = document.createElement('tr');
      tr.dataset.id = cat.id;
      tr.innerHTML = `
        <td>${cat.name}</td>
        <td>${cat.slug}</td>
        <td>${cat.description || ''}</td>
        <td>${cat.totalStalls}</td>
        <td>${badge(cat.status)}</td>

        <td class="actions">
          <button class="btn-sm btn-neutral" data-action="edit">Edit</button>
          <button class="btn-sm btn-danger"  data-action="delete">Delete</button>
        </td>
      `;
      tbody.appendChild(tr);
    });
}

function clearForm() {
  editingId        = null;
  nameInput.value  = '';
  slugInput.value  = '';
  descInput.value  = '';
  statusInput.value= 'Active';
  orderInput.value = '';
  colorInput.value = '#2563eb';
  errName.textContent = '';
}

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

  const name  = nameInput.value.trim();
  let slug    = slugInput.value.trim();
  const desc  = descInput.value.trim();
  const status= statusInput.value;
  const order = parseInt(ordreInput.value, 10) || (categories.length + 1);
  const color = colorInput.value;

  if (!slug) {
    slug = name.toLowerCase().replace(/[^a-z0-9]+/gi, '-');
  }

  if (editingId) {
    // update
    const idx = categories.findIndex(c => c.id === editingId);
    if (idx !== -1) {
      categories[idx] = {
        ...categories[idx],
        name, slug, description: desc, status, order, color
      };
    }
  } else {
    const newId = categories.length
      ? Math.max(...categories.map(c => c.id)) + 1
      : 1;
    categories.push({
      id: newId,
      name,
      slug,
      description: desc,
      totalStalls: 0,
      status,
      order,
      color
    });
  }

  clearForm();
  renderTable();
});

// edit / delete buttons
tbody.addEventListener('click', e => {
  const btn = e.target.closest('button[data-action]');
  if (!btn) return;

  const tr  = btn.closest('tr');
  const id  = Number(tr.dataset.id);
  const cat = categories.find(c => c.id === id);
  if (!cat) return;

  const action = btn.dataset.action;

  if (action === 'edit') {
    editingId        = id;
    nameInput.value  = cat.name;
    slugInput.value  = cat.slug;
    descInput.value  = cat.description;
    statusInput.value= cat.status;
    orderInput.value = cat.order;
    colorInput.value = cat.color || '#2563eb';
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
  }

  