// Hot Deal countdown (moved from inline script in index.php)
// This script updates the elements with ids: hd-days, hd-hours, hd-mins, hd-secs

document.addEventListener('DOMContentLoaded', function () {
  // Set target date/time for the hot deal countdown.
  // By default this example sets the countdown to 7 days from now at 23:59:59.
  // You can replace the logic with a fixed date: new Date('2025-12-01T23:59:59');
  var target = new Date();
  target.setDate(target.getDate() + 7);
  target.setHours(23, 59, 59, 999);

  var dElem = document.getElementById('hd-days');
  var hElem = document.getElementById('hd-hours');
  var mElem = document.getElementById('hd-mins');
  var sElem = document.getElementById('hd-secs');

  // If the elements are not present (page variant), do nothing.
  if (!dElem || !hElem || !mElem || !sElem) return;

  function pad(n) { return (n < 10 ? '0' + n : '' + n); }

  function update() {
    var now = new Date();
    var diff = target - now;
    if (diff <= 0) {
      // expired
      dElem.textContent = '00';
      hElem.textContent = '00';
      mElem.textContent = '00';
      sElem.textContent = '00';
      clearInterval(timer);
      return;
    }
    var secs = Math.floor(diff / 1000);
    var days = Math.floor(secs / 86400); secs -= days * 86400;
    var hours = Math.floor(secs / 3600); secs -= hours * 3600;
    var mins = Math.floor(secs / 60); secs -= mins * 60;
    dElem.textContent = pad(days);
    hElem.textContent = pad(hours);
    mElem.textContent = pad(mins);
    sElem.textContent = pad(secs);
  }

  update();
  var timer = setInterval(update, 1000);
});
