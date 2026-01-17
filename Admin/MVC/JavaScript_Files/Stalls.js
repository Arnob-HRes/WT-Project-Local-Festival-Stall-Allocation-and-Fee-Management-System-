const statusSelect   = document.getElementById('filter-status');
const categorySelect = document.getElementById('filter-category');
const searchInput    = document.getElementById('filter-search');
const tableBody      = document.getElementById('stalls-body');

function getStatusClass(status) {
    if (status === 'Available')   return 'badge badge-available';
    if (status === 'Booked')   return 'badge badge-booked';
    if (status === 'Maintenance')   return 'badge badge-maintenance';
    
    return 'badge';
}

async function loadStalls() {
    const params = new URLSearchParams({
        ajax: '1',    //calling ajax
        status: statusSelect ? statusSelect.value : 'all',
        category: categorySelect ? categorySelect.value : 'all',
        search: searchInput ? searchInput.value.trim() : ''
    });

    try {
        const res  = await fetch('Stalls.php?' + params.toString());
        const json = await res.json(); // JSON parse 

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
            const sizeText = `${row.width}m x ${row.lenth}m`;

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

async function loadCategoryOptions() {
    try {
        const res  = await fetch('../Controller Logic/CategoryOptions.php');
        const json = await res.json();
        if (!json.success) return;

        const list = json.data;
        const catSelect = document.getElementById('category');
        const filterCat = document.getElementById('filter-category');

        if (catSelect) {
            catSelect.innerHTML = '<option value="">Select category</option>';
            list.forEach(name => {
                const opt = document.createElement('option');
                opt.value = name;
                opt.textContent = name;
                catSelect.appendChild(opt);
            });
        }
        if (filterCat) {
            // top filter dropdown
            const current = filterCat.value;
            filterCat.innerHTML = '<option value="all">All Categories</option>';
            list.forEach(name => {
                const opt = document.createElement('option');
                opt.value = name;
                opt.textContent = name;
                filterCat.appendChild(opt);
            });
            if (current && current !== 'all') {
                filterCat.value = current;
            }
        }
    } catch (e) {
        console.error(e);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    loadCategoryOptions();
    loadStalls();
});

