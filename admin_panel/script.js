var acceptBtns = document.querySelectorAll('.accept-btn');
acceptBtns.forEach(function(btn) {
  btn.addEventListener('click', function() {
    var row = btn.parentNode.parentNode;
    row.style.backgroundColor = '#dff0d8';
    btn.textContent = 'Accepted';
    btn.disabled = true;
    var declineBtn = row.querySelector('.decline-btn');
    declineBtn.disabled = false;
  });
});

var declineBtns = document.querySelectorAll('.decline-btn');
declineBtns.forEach(function(btn) {
  btn.addEventListener('click', function() {
    var row = btn.parentNode.parentNode;
    row.style.backgroundColor = '#f2dede';
    btn.textContent = 'Declined';
    btn.disabled = true;
    var acceptBtn = row.querySelector('.accept-btn');
    acceptBtn.disabled = false;
  });
});
