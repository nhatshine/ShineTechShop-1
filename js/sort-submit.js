// Auto-submit form when sort option changes
document.addEventListener('DOMContentLoaded', function() {
    const sortSelect = document.querySelector('select[name="sort"]');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            document.getElementById('filters').submit();
        });
    }
});