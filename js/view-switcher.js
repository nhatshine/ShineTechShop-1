document.addEventListener('DOMContentLoaded', function() {
    const gridBtn = document.querySelector('.store-grid li:first-child');
    const listBtn = document.querySelector('.store-grid li:last-child');
    const productsContainer = document.querySelector('#product-grid');

    if (gridBtn && listBtn && productsContainer) {
        // Grid View
        gridBtn.addEventListener('click', function(e) {
            e.preventDefault();
            gridBtn.classList.add('active');
            listBtn.classList.remove('active');
            productsContainer.classList.remove('list-view');
            
            // Convert list view products back to grid view
            document.querySelectorAll('.product').forEach(product => {
                product.classList.remove('product-list');
            });
        });

        // List View
        listBtn.addEventListener('click', function(e) {
            e.preventDefault();
            listBtn.classList.add('active');
            gridBtn.classList.remove('active');
            productsContainer.classList.add('list-view');
            
            // Convert grid view products to list view
            document.querySelectorAll('.product').forEach(product => {
                product.classList.add('product-list');
            });
        });
    }
});