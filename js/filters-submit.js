// Auto-submit filters form when category checkboxes change (progressive enhancement)
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('filters');
  if (!form) return;
  var checkboxes = form.querySelectorAll('input[type="checkbox"][name="cat[]"]');
  if (!checkboxes) return;
  checkboxes.forEach(function(cb){
    cb.addEventListener('change', function(){
      // submit form when a category checkbox changes
      form.submit();
    });
  });
});
