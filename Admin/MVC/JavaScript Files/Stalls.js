const statusSelect   = document.getElementById('filter-status');
const categorySelect = document.getElementById('filter-category');
const searchInput    = document.getElementById('filter-search');
const tableBody      = document.getElementById('stalls-body');

function getStatusClass(status) {
    if (status === 'Available')   return 'badge badge-available';
    if (status === 'Booked')      return 'badge badge-booked';
    if (status === 'Maintenance') return 'badge badge-maintenance';
    return 'badge';
}

async function loadStalls() {
    const params = new URLSearchParams({
        ajax: '1',
        status: statusSelect ? statusSelect.value : 'all',
        category: categorySelect ? categorySelect.value : 'all',
        search: searchInput ? searchInput.value.trim() : ''
    });

    try {
        const res  = await fetch('Stalls.php?' + params.toString());
        const json = await res.json(); // JSON parse [web:150][web:133]

        tableBody.innerHTML = '';

        if (!json.success || json.data.length === 0) {
            const tr = document.createElement('tr');
            const td = document.createElement('td');
            td.colSpan = 7;
            td.textContent = 'No stalls found.';
            tr.appendChild(td);
            tableBody.appendChild(tr);
            return;
        }

        json.data.forEach(row => {
            const tr = document.createElement('tr');
            const sizeText = `${row.width}m x ${row.length}m`;

            tr.innerHTML = `
                <td>${row.stall_id}</td>
                <td>${row.zone}</td>
                <td>${row.category}</td>
                <td>${sizeText}</td>
                <td>---</td>
                <td>${row.base_fee}</td>
                <td><span class="${getStatusClass(row.status)}">${row.status}</span></td>
            `;
            tableBody.appendChild(tr);
        });

    } catch (err) {
        console.error('Error loading stalls', err);
    }
}

// event bindings
if (statusSelect)   statusSelect.addEventListener('change', loadStalls);
if (categorySelect) categorySelect.addEventListener('change', loadStalls);
if (searchInput) {
    searchInput.addEventListener('input', () => {
        clearTimeout(searchInput._t);
        searchInput._t = setTimeout(loadStalls, 300);
    });
}

// initial load
document.addEventListener('DOMContentLoaded', loadStalls);
