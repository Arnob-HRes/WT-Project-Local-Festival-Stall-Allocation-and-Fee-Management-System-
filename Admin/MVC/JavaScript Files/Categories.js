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



